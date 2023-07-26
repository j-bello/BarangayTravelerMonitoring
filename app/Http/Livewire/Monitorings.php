<?php

namespace App\Http\Livewire;

use App\Models\History;
use Livewire\Component;
use App\Models\Monitoring;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;


class Monitorings extends Component
{

    public  $firstName, $lastName, $day_one, $day_two, $day_three, $day_four, $day_five, $day_six, $day_seven, $day_eight, $day_nine, $day_ten, $day_eleven, $day_twelve, $day_thirteen, $day_fourteen, $status, $result, $monitor_id, $monitoring, $history;
    public $isOpen = 0;
    use WithPagination;
    public $search = '';

    public function render()
    {
        return view('livewire.monitorings.monitorings', [
            'monitorings' => Monitoring::where('lastName', 'like', '%'.$this->search.'%')->paginate(7),

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
        $this->day_one = '';
        $this->day_two = '';
        $this->day_three = '';
        $this->day_four = '';
        $this->day_five = '';
        $this->day_six = '';
        $this->day_seven = '';
        $this->day_eight = '';
        $this->day_nine = '';
        $this->day_ten = '';
        $this->day_eleven = '';
        $this->day_twelve = '';
        $this->day_thirteen = '';
        $this->day_fourteen = '';
        $this->status = '';
        $this->result = '';


    }
    public function store()
    {





        $this->validate([
            'firstName'=>'required',
            'lastName'=>'required',
         //   'day_one'=>'required',
          //  'day_two'=>'required',
         //   'day_three'=>'required',
        //    'day_four'=>'required',
        //    'day_five'=>'required',
        //      'day_six'=>'required',
        //    'day_seven'=>'required',
        //    'day_eight'=>'required',
         //   'day_nine'=>'required',
         //   'day_ten'=>'required',
        //   'day_eleven'=>'required',
        //    'day_twelve'=>'required',
        //    'day_thirteen'=>'required',
        //    'day_fourteen'=>'required',
            'status'=>'required',
            'result'=>'required',




        ]);

        Monitoring::updateOrCreate(['id' => $this->monitor_id], [



            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'day_one'=> $this->day_one,
            'day_two'=> $this->day_two,
            'day_three'=> $this->day_three,
            'day_four'=> $this->day_four,
            'day_five'=> $this->day_five,
            'day_six'=> $this->day_six,
           'day_seven'=> $this->day_seven,
           'day_eight'=> $this->day_eight,
            'day_nine'=> $this->day_nine,
            'day_ten'=> $this->day_ten,
            'day_eleven'=> $this->day_eleven,
            'day_twelve'=> $this->day_twelve,
            'day_thirteen'=> $this->day_thirteen,
            'day_fourteen'=> $this->day_fourteen,
           'status'=> $this->status,
            'result'=> $this->result,

        ]);

        session()->flash('message',
            $this->monitor_id ? 'Record Updated Successfully.' : 'Record Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }
    public function edit($id)
    {
        $Monitoring = Monitoring::findOrFail($id);

         $this->monitor_id = $id;

        $this->firstName = $Monitoring->firstName;
        $this->lastName = $Monitoring->lastName;
       $this->day_one = $Monitoring->day_one;
       $this->day_two = $Monitoring->day_two;
        $this->day_three =$Monitoring->day_three;
        $this->day_four = $Monitoring->day_four;
        $this->day_five = $Monitoring->day_five;
       $this->day_six = $Monitoring->day_six;
       $this->day_seven = $Monitoring->day_seven;
       $this->day_eight = $Monitoring->day_eight;
        $this->day_nine = $Monitoring->day_nine;
        $this->day_ten = $Monitoring->day_ten;
       $this->day_eleven = $Monitoring->day_eleven;
       $this->day_twelve = $Monitoring->day_twelve;
       $this->day_thirteen = $Monitoring->day_thirteen;
        $this->day_fourteen = $Monitoring->day_fourteen;
        $this->status = $Monitoring->status;
        $this->result = $Monitoring->result;

        $this->openModal();

    }
    public function delete($id)
    {
        Monitoring::find($id)->delete();
        session()->flash('message', 'Record Deleted Successfully.');
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function truncate()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('monitorings')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');



       // DB::table('travelers')->truncate();
          session()->flash('message', 'All Records Deleted Successfully.');
    }

    public function moveNew(){
        DB::table('histories')->truncate();

        DB::statement('INSERT histories SELECT * FROM monitorings');

        session()->flash('message', 'Records have been moved successfully.');
    }

    public function getRelease()
    {

       // DB::statement('INSERT certificates SELECT firstName,lastName,result FROM monitorings');

     // Monitoring::select('firstName','lastName','result')->where('result', 'Negative')->get();


       // DB::statement('INSERT INTO certificates SELECT firstName, lastName, result FROM monitorings');
       DB::table('certificates')->truncate();

        DB::statement('INSERT certificates SELECT * FROM monitorings WHERE result = "Negative"' );

        session()->flash('message', 'Records have been moved to Recovered Traveler Records successfully.');


    }


}
