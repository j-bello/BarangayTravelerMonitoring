<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Resident;
use Livewire\WithPagination;


class Residents extends Component
{
    public  $firstName, $lastName, $address, $sex, $age,$residency_year, $date_of_birth, $contactNo,$resident_id;
    public $isOpen = 0;
    use WithPagination;
    public $search = '';

    public function render()
    {
        return view('livewire.residents.residents', [
            'residents' => Resident::where('lastName', 'like', '%'.$this->search.'%')->paginate(7),

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
        $this->address = '';
        $this->sex = '';
        $this->age = '';
        $this->residency_year = '';
        $this->date_of_birth = '';
        $this->contactNo = '';





    }

    public function store()
    {
        $this->validate([
            'firstName'=>'required',
            'lastName'=>'required',
            'address'=>'required',
            'sex'=>'required',
            'age'=>'required',
            'residency_year'=>'required',
            'date_of_birth'=>'required',
            'contactNo'=>'required',


        ]);

        Resident::updateOrCreate(['id' => $this->resident_id], [



            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'address' => $this->address,
            'sex' => $this->sex,
            'age' => $this->age,
            'residency_year' => $this->residency_year,
            'date_of_birth' => $this->date_of_birth,
            'contactNo' => $this->contactNo,


        ]);

        session()->flash('message',
            $this->resident_id ? 'Record Updated Successfully.' : 'Record Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }
    public function edit($id)
    {
        $Resident = Resident::findOrFail($id);

         $this->resident_id = $id;
        $this->firstName = $Resident->firstName;
        $this->lastName = $Resident->lastName;
        $this->address = $Resident->address;
        $this->sex = $Resident->sex;
        $this->age = $Resident->age;
        $this->residency_year = $Resident->residency_year;
        $this->date_of_birth = $Resident->date_of_birth;
        $this->contactNo = $Resident->contactNo;

        $this->openModal();

    }

    public function delete($id)
    {
        Resident::find($id)->delete();
        session()->flash('message', 'Record Deleted Successfully.');
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function truncate()
    {

    Resident::truncate();
      session()->flash('message', 'All Records Deleted Successfully.');
    }
}
