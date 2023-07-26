<?php

namespace App\Http\Livewire;
use App\Models\Certificate;
use Livewire\WithPagination;

use Livewire\Component;

class Certificates extends Component
{
    public  $firstName, $lastName, $day_one, $day_two, $day_three, $day_four, $day_five, $day_six, $day_seven, $day_eight, $day_nine, $day_ten, $day_eleven, $day_twelve, $day_thirteen, $day_fourteen, $status, $result, $certificate_id, $monitoring, $history;
    public $isOpen = 0;
    use WithPagination;
    public $search = '';

    public function render()
    {
        return view('livewire.certificate.certificates', [
            'certificates' => Certificate::where('lastName', 'like', '%'.$this->search.'%')->paginate(7),

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

        Certificate::updateOrCreate(['id' => $this->certificate_id], [



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
            $this->certificate_id ? 'Record Updated Successfully.' : 'Record Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }
    public function edit($id)
    {
        $Certificate = Certificate::findOrFail($id);

         $this->certificate_id = $id;

        $this->firstName = $Certificate->firstName;
        $this->lastName = $Certificate->lastName;
       $this->day_one = $Certificate->day_one;
       $this->day_two = $Certificate->day_two;
        $this->day_three =$Certificate->day_three;
        $this->day_four = $Certificate->day_four;
        $this->day_five = $Certificate->day_five;
       $this->day_six = $Certificate->day_six;
       $this->day_seven = $Certificate->day_seven;
       $this->day_eight = $Certificate->day_eight;
        $this->day_nine = $Certificate->day_nine;
        $this->day_ten = $Certificate->day_ten;
       $this->day_eleven = $Certificate->day_eleven;
       $this->day_twelve = $Certificate->day_twelve;
       $this->day_thirteen = $Certificate->day_thirteen;
        $this->day_fourteen = $Certificate->day_fourteen;
        $this->status = $Certificate->status;
        $this->result = $Certificate->result;

        $this->openModal();

    }
    public function delete($id)
    {
        Certificate::find($id)->delete();
        session()->flash('message', 'Record Deleted Successfully.');
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
