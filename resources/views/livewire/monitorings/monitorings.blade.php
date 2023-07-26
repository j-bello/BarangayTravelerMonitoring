
<x-slot name="header">
    <h2 class="font-bold text-xl text-gray-800 leading-tight">
            COVID-19 Traveler Monitoring Records    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-max mx-auto sm:px-6 lg:px-5 ">
        <div class="bg-blue-200 overflow-scroll shadow-xl sm:rounded-lg px-4 py-4">
            @if (session()->has('message'))
        <div class="flex">
                <div class="flex-auto w-200 mx-auto bg-blue-300 border-t-4 border-blue-300 rounded-b text-teal-900 px-4 py-3 shadow-md my-3 object-fill" role="alert">
                  <div class="flex">
                    <div>
                      <p class="text-sm">{{ session('message') }}</p>
                    </div>
                  </div>
                </div>
        </div>
            @endif




            <a href="{{ route('pdf.generatePDFMonitoring') }}" class="bg-red-400 hover:bg-green-600 text-white font-bold py-2 px-4 rounded my-3 text-xs">Generate PDF</a>
            <button  wire:click="moveNew()" onclick="return confirm('Duplicate Records?')"; class="bg-red-400 hover:bg-green-600 text-white font-bold py-2 px-4 rounded my-3 text-xs">Duplicate Records</button>

            <input type="text"  class="float-right bg-white-300 text-black font-bold py-2 px-4 rounded my-3 border-black text-xs object-fill" placeholder="Search by Last name" wire:model="search" />
            @if($isOpen)
                @include('livewire.monitorings.create')
            @endif

            <table class="table-auto">
                <thead>
                    <tr class="text-white">
                        <th class="px-4 py-2 w-8 text-xs">No.</th>
                        <th class="px-4 py-2 w-32 text-xs ">First Name</th>
                        <th class="px-4 py-2 w-32 text-xs ">Last Name</th>


                        <th class="px-4 py-2 w-24 text-xs">Day 1</th>
                        <th class="px-4 py-2 w-24 text-xs">Day 2</th>
                        <th class="px-4 py-2 w-24 text-xs">Day 3</th>
                        <th class="px-4 py-2 w-24 text-xs">Day 4</th>
                        <th class="px-4 py-2 w-24 text-xs">Day 5</th>
                        <th class="px-4 py-2 w-24 text-xs">Day 6</th>
                        <th class="px-4 py-2 w-24 text-xs">Day 7</th>
                        <th class="px-4 py-2 w-24 text-xs">Day 8</th>
                        <th class="px-4 py-2 w-24 text-xs">Day 9</th>
                        <th class="px-4 py-2 w-24 text-xs">Day 10</th>
                        <th class="px-4 py-2 w-24 text-xs">Day 11</th>
                        <th class="px-4 py-2 w-24 text-xs">Day 12</th>
                        <th class="px-4 py-2 w-24 text-xs">Day 13</th>
                        <th class="px-4 py-2 w-24 text-xs">Day 14</th>

                        <th class="px-4 py-2 w-56 text-xs">Status</th>
                        <th class="px-4 py-2 w-56 text-xs">Result</th>
                        <th class="px-4 py-2 w-80 text-xs">Action</th>

                    </tr>
                </thead>
                <tbody>
                   @foreach($monitorings as $monitoring)
                    <tr>
                        <td class="border border-black px-4 py-2 text-center text-xs">{{ $monitoring->id }}</td>
                        <td class="border border-black border px-4 py-2 text-center text-xs">{{ $monitoring->firstName }}</td>
                        <td class="border border-black border px-4 py-2 text-center text-xs">{{ $monitoring->lastName }}</td>

                        <td class="border border-black border px-4 py-2 text-center text-xs">{{ $monitoring->day_one }}</td>
                        <td class="border border-black border px-4 py-2 text-center text-xs">{{ $monitoring->day_two }}</td>
                        <td class="border border-black border px-4 py-2 text-center text-xs">{{ $monitoring->day_three }}</td>
                        <td class="border border-black border px-4 py-2 text-center text-xs">{{ $monitoring->day_four }}</td>
                        <td class="border border-black border px-4 py-2 text-center text-xs">{{ $monitoring->day_five }}</td>
                        <td class="border border-black border px-4 py-2 text-center text-xs">{{ $monitoring->day_six }}</td>
                        <td class="border border-black border px-4 py-2 text-center text-xs">{{ $monitoring->day_seven }}</td>
                        <td class="border border-black border px-4 py-2 text-center text-xs">{{ $monitoring->day_eight }}</td>
                        <td class="border border-black border px-4 py-2 text-center text-xs">{{ $monitoring->day_nine }}</td>
                        <td class="border border-black border px-4 py-2 text-center text-xs">{{ $monitoring->day_ten }}</td>
                        <td class="border border-black border px-4 py-2 text-center text-xs">{{ $monitoring->day_eleven }}</td>
                        <td class="border border-black border px-4 py-2 text-center text-xs">{{ $monitoring->day_twelve }}</td>
                        <td class="border border-black border px-4 py-2 text-center text-xs">{{ $monitoring->day_thirteen}}</td>
                        <td class="border border-black border px-4 py-2 text-center text-xs">{{ $monitoring->day_fourteen }}</td>


                        <td class="border border-black border px-4 py-2 text-center text-xs">{{ $monitoring->status }}</td>
                        <td class="border border-black border px-4 py-2 text-center text-xs">{{ $monitoring->result }}</td>

                        <td class="border border-black border px-4 py-2 text-center text-xs">

                            <button  wire:click="getRelease()" onclick="return confirm('Release Traveller?')"; class="bg-red-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">Release</button>

                        <button wire:click="edit({{ $monitoring->id }})" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">Edit</button>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>

            {{ $monitorings->links() }}
        </div>
    </div>
</div>
<style>
thead{
    background:#B2967D;
}
table{
    background:#E7D8C9;
    border: 3px solid black;
  border-radius: 10px;
}
h2{
    text-align:left;
    
}

</style>