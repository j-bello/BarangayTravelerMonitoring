<x-slot name="header">
    <h2 class="font-bold text-xl text-gray-800 leading-tight">
            Traveler Records    </h2>
            
</x-slot>
<div class="py-5">

    <div class="max-w-screen mx-auto sm:px-6 lg:px-5">
        <div class="bg-blue-200 overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if (session()->has('message'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                  <div class="flex">
                    <div>
                      <p class="text-sm">{{ session('message') }}</p>
                    </div>
                  </div>
                </div>
                </div>
            @endif
            <button wire:click="create()" class="bg-red-400 hover:bg-green-600 text-white font-bold py-2 px-4 rounded my-3 text-xs">Create</button>
            <button  wire:click="truncate()" onclick="return confirm('Delete All Records?')"; class="bg-red-400 hover:bg-red-800 text-white font-bold py-2 px-4 rounded my-3 text-xs">Delete All Records</button>
            <a href="{{ route('pdf.generatePDFtraveler') }}" class="bg-red-400 hover:bg-green-600 text-white font-bold py-2 px-4 rounded my-3 text-xs">Generate PDF</a>

            <input type="text"  class="float-right bg-white-300 text-black font-bold py-2 px-4 rounded my-3 border-black text-xs" placeholder="Search by Last name" wire:model="search" />
            @if($isOpen)
                @include('livewire.travelers.create')
            @endif
            <table class="table-auto">
                <thead>
                    <tr class="text-white">
                        <th class="px-4 py-2 w-16 text-xs">No.</th>
                        <th class="px-4 py-2 w-48 text-xs ">First Name</th>
                        <th class="px-4 py-2 w-48 text-xs ">Last Name</th>
                        <th class="px-4 py-2 w-36 text-xs ">Arrival Date</th>
                        <th class="px-4 py-2 w-36 text-xs ">Release Date</th>
                        <th class="px-4 py-2 w-80 text-xs">Address</th>
                        <th class="px-4 py-2 w-28 text-xs">Sex</th>
                        <th class="px-4 py-2 w-20 text-xs">Age</th>
                        <th class="px-4 py-2 w-32 text-xs">Date of Birth</th>
                        <th class="px-4 py-2 w-48 text-xs">Contact No.</th>
                        <th class="px-4 py-2 w-60 text-xs">Action</th>

                    </tr>
                </thead>
                <tbody>
                   @foreach($travelers as $traveler)
                    <tr>
                        <td class="border border-black px-4 py-2 text-center text-xs">{{ $traveler->id }}</td>
                        <td class="border border-black border px-4 py-2 text-center text-xs">{{ $traveler->firstName }}</td>
                        <td class="border border-black border px-4 py-2 text-center text-xs">{{ $traveler->lastName }}</td>
                        <td class="border border-black border px-4 py-2 text-center text-xs">{{ $traveler->arrival_date }}</td>
                        <td class="border border-black border px-4 py-2 text-center text-xs">{{ $traveler->release_date }}</td>
                        <td class="border border-black border px-4 py-2  text-center text-xs">{{ $traveler->address }}</td>
                        <td class="border border-black border px-4 py-2 text-center text-xs">{{ $traveler->sex }}</td>
                        <td class="border border-black border px-4 py-2 text-center text-xs">{{ $traveler->age }}</td>
                        <td class="border border-black border px-4 py-2 text-center text-xs">{{ $traveler->date_of_birth }}</td>
                        <td class="border border-black border px-4 py-2 text-center text-xs">{{ $traveler->contactNo }}</td>
                        <td class="border border-black border px-4 py-2 text-center text-xs">
                            <button wire:click="addMonitoring({{ $traveler->id }})" class="bg-green-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded"> Add to Monitoring</button>

                        <button wire:click="edit({{ $traveler->id }})" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">Edit</button>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            {{ $travelers->links() }}
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