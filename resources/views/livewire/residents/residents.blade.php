<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Resident Records    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-screen-full mx-auto sm:px-6 lg:px-5">
        <div class="bg-blue-300 overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if (session()->has('message'))
                <div class="bg-white border-t-4 border-teal-500 rounded-b text-black px-4 py-3 shadow-md my-3" role="alert">
                  <div class="flex">
                    <div>
                      <p class="text-sm">{{ session('message') }}</p>
                    </div>
                  </div>
                </div>
            @endif
            <button wire:click="create()" class="bg-black hover:bg-gray-700 text-white font-bold py-2 px-4 rounded my-3 text-xs">Create</button>
            <button  wire:click="truncate()" onclick="return confirm('Delete All Records?')"; class="bg-black hover:bg-gray-700 text-white font-bold py-2 px-4 rounded my-3 text-xs">Delete All Records</button>


            <input type="text"  class="float-right bg-white-300 text-black font-bold py-2 px-4 rounded my-3 border-black text-xs" placeholder="Search by Last name" wire:model="search" />
            @if($isOpen)
                @include('livewire.residents.create')
            @endif
            <table class="table-auto">
                <thead>
                    <tr class="bg-black text-white">
                        <th class="px-4 py-2 w-8 text-xs">No.</th>
                        <th class="px-4 py-2 w-32 text-xs">First Name</th>
                        <th class="px-4 py-2 text-xs">Last Name</th>
                        <th class="px-4 py-2 text-xs w-56">Address</th>
                        <th class="px-4 py-2 w-32 text-xs">Sex</th>
                        <th class="px-4 py-2 w-8 text-xs">Age</th>
                        <th class="px-4 py-2 w-32 text-xs">Residency Date</th>
                        <th class="px-4 py-2 w-32 text-xs">Date of Birth</th>
                        <th class="px-4 py-2 w-24 text-xs">Contact No.</th>
                        <th class="px-4 py-2 w-80 text-xs">Action</th>

                    </tr>
                </thead>
                <tbody>

                    @foreach($residents as $resident)
                    <tr>
                        <td class="border border-black px-4 py-2 text-center text-xs">{{ $resident->id }}</td>
                        <td class="border border-black border px-4 py-2 text-xs">{{ $resident->firstName }}</td>
                        <td class="border border-black border px-4 py-2 text-xs">{{ $resident->lastName }}</td>
                        <td class="border border-black border px-4 py-2  text-center text-xs">{{ $resident->address }}</td>
                        <td class="border border-black border px-4 py-2 text-center text-xs">{{ $resident->sex }}</td>
                        <td class="border border-black border px-4 py-2 text-center text-xs">{{ $resident->age }}</td>
                        <td class="border border-black border px-4 py-2 text-center text-xs">{{ $resident->residency_year }}</td>
                        <td class="border border-black border px-4 py-2 text-center text-xs">{{ $resident->date_of_birth }}</td>
                        <td class="border border-black border px-4 py-2 text-center text-xs">{{ $resident->contactNo }}</td>
                        <td class="border border-black border px-4 py-2 text-center text-xs">
                            <button wire:click="addAdmission({{ $resident->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded text-xs">Barangay Clearance</button>
                            <button wire:click="addAdmission({{ $resident->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded text-xs">Residency Certificate</button>

                        <button wire:click="edit({{ $resident->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded text-xs">Edit</button>
                        <button wire:click="delete({{ $resident->id }})" onclick="return confirm('Delete Record?')"; class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded text-xs" >Delete</button>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            {{ $residents->links() }}



        </div>
    </div>
</div>
