<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Traveler;
use App\Models\Monitoring;
use Illuminate\Support\Facades\DB;

class Travelers extends Component
{

    public  $firstName, $lastName,$arrival_date, $release_date,$traveler_number, $address, $sex, $age, $date_of_birth, $contactNo, $travel_id;
    public $isOpen = 0;
    use WithPagination;
    public $search = '';


    public function render()
    {
       return view('livewire.travelers.travelers', [
            'travelers' => Traveler::where('lastName', 'like', '%'.$this->search.'%')->paginate(7),

        ]);
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }


    public function closeModal()
    {
        $this->isOpen = false;
    }

    private function resetInputFields(){
        $this->firstName = '';
        $this->lastName = '';
        $this->arrival_date = '';
        $this->release_date = '';
        $this->address = '';
        $this->sex = '';
        $this->age = '';
        $this->date_of_birth = '';
        $this->contactNo = '';
    }

    public function store()
    {
        $this->validate([
            'firstName'=>'required',
            'lastName'=>'required',
            'arrival_date'=>'required',
           // 'release_date'=>'required',
            'address'=>'required',
            'sex'=>'required',
            'age'=>'required',
            'date_of_birth'=>'required',
            'contactNo'=>'required|digits:11',


        ]);

        Traveler::updateOrCreate(['id' => $this->travel_id], [



            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'arrival_date' => $this->arrival_date,
            'release_date' => $this->release_date,
            'address' => $this->address,
            'sex' => $this->sex,
            'age' => $this->age,
            'date_of_birth' => $this->date_of_birth,
            'contactNo' => $this->contactNo,


        ]);

        session()->flash('message',
            $this->travel_id ? 'Record Updated Successfully.' : 'Record Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }
    public function edit($id)
    {
        $Traveler = Traveler::findOrFail($id);

         $this->travel_id = $id;
        $this->firstName = $Traveler->firstName;
        $this->lastName = $Traveler->lastName;
        $this->address = $Traveler->address;
        $this->sex = $Traveler->sex;
        $this->age = $Traveler->age;
        $this->date_of_birth = $Traveler->date_of_birth;
        $this->contactNo = $Traveler->contactNo;

        $this->openModal();

    }
    public function delete($id)
    {
        Traveler::find($id)->delete();
        session()->flash('message', 'Record Deleted Successfully.');
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function truncate()
    {

    //Traveler::truncate();
    DB::statement('SET FOREIGN_KEY_CHECKS=0;');
    DB::table('travelers')->truncate();
    DB::table('monitorings')->truncate();
    DB::statement('SET FOREIGN_KEY_CHECKS=1;');



   // DB::table('travelers')->truncate();
      session()->flash('message', 'All Records Deleted Successfully.');
    }

    public function addMonitoring($id){
        $Traveler = Traveler::findOrFail($id);
        $this->ids = $id;

        $Monitoring = new Monitoring();
        $Monitoring->firstName= $Traveler->firstName;
        $Monitoring->lastName= $Traveler->lastName;
        $Monitoring->traveler_number= $Traveler->traveler_number;

        $Traveler->monitor()->save($Monitoring);

        session()->flash('message', 'Traveler Added to Monitorings');


        }
        
}
