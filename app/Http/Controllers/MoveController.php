<?php

namespace App\Http\Controllers;
use Exception;
use App\Models\History;
use App\Models\Monitoring;
use Illuminate\Http\Request;
use Livewire\WithPagination;


class MoveController extends Controller
{
  /*  use WithPagination;
    public $search = '';
    //
    public function movess($id)
    {
      //  dd($id);

  $first = Monitoring::where('id', $id)->first();
  //$Monitoring = Monitoring::findOrFail($id)->Monitoring();

  $firstName = $first->firstName;
  $lastName = $first->lastName;
  $day_one = $first->day_one;
  $day_two = $first->day_two;
  $day_three = $first->day_three;
  $day_four = $first->day_four;
  $day_five = $first->day_five;
  $day_six = $first->day_six;
  $day_seven = $first->day_seven;
  $day_eight = $first->day_eight;
  $day_nine = $first->day_nine;
  $day_ten = $first->day_ten;
  $day_eleven = $first->day_eleven;
  $day_twelve = $first->day_twelve;
  $day_thirteen = $first->day_thirteen;
  $day_fourteen = $first->day_fourteen;
  $status = $first->status;
  $result = $first->result;

  $first->delete();

    //$history = $monitoring->replicate();

    //$history = $monitoring->toArray();

  //  History::firstOrCreate($history);

   // $history->save();

  // DB::table('monitorings')->insert($history);


$histories =  new History();
$histories->firstName = $firstName;
$histories->lastName = $lastName;
$histories->day_one = $day_one;
$histories->day_two =  $day_two;
$histories->day_three  =  $day_three;
$histories->day_four =  $day_four;
$histories->day_five =  $day_five;
$histories->day_six =  $day_six;
$histories->day_seven =  $day_seven;
$histories->day_eight =  $day_eight;
$histories->day_nine =  $day_nine;
$histories->day_ten =  $day_ten;
$histories->day_eleven =  $day_eleven;
$histories->day_twelve =  $day_twelve;
$histories->day_thirteen =  $day_thirteen;
$histories->day_fourteen =  $day_fourteen;
$histories->status =  $status;
$histories->result =  $result;
$histories->save();

return view('livewire.monitorings.monitorings', [
    'monitorings' => Monitoring::where('lastName', 'like', '%'.$this->search.'%')->paginate(7),

]);

    }
*/


public static function move_one_record(Request $request)
    {

        // before code

        // get id
        $id = intval( $request->input('id', 0) );

        // grab the first row of data
        $row_object = Monitoring::where('id', $id)->first()->toArray();

        // check if we have data
        //if (empty($row_object)) { throw new Exception("No valid row data."); }

        // convert to array
        $row_array = $row_object->toArray();

        // unset the row id (assuming id autoincrements)
        unset($row_array['id']);

        // insert the row data into the new table (assuming all fields are the same)
        History::insert($row_array);

        // after code

    }









}
