
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            COVID-19 Traveler Monitoring Records    </h2>
</x-slot>
<div class="py-10">
    <div class="max-w-xl mx-auto sm:px-6 lg:px-5 ">
        <div class="bg-blue-200 overflow shadow-xl sm:rounded-lg px-4 py-4">
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




            <a href="{{ route('pdf.certificate') }}" class="bg-red-400 hover:bg-green-600 text-white font-bold py-2 px-2 rounded my-3 text-xs">Generate Medical Certificate</a>
            

            <input type="text"  class="float-right bg-white-300 text-black font-bold py-2 px-4 rounded my-3 border-black text-xs object-fill" placeholder="Search by Last name" wire:model="search" />
            @if($isOpen)
                @include('livewire.monitorings.create')
            @endif
           

            <table class="table-auto ">
                <thead>
                    <tr class="text-white">
                        <th class="px-4 py-2 w-8 text-xs">No.</th>
                        <th class="px-4 py-2 w-32 text-xs ">First Name</th>
                        <th class="px-4 py-2 w-32 text-xs ">Last Name</th>




                        <th class="px-4 py-2 w-60 text-xs">Status</th>
                        <th class="px-4 py-2 w-60 text-xs">Result</th>

                    </tr>
                </thead>
                <tbody>
                   @foreach($certificates as $certificate)
                    <tr>
                        <td class="border border-black px-4 py-2 text-center text-xs">{{ $certificate->id }}</td>
                        <td class="border border-black border px-4 py-2 text-center text-xs">{{ $certificate->firstName }}</td>
                        <td class="border border-black border px-4 py-2 text-center text-xs">{{ $certificate->lastName }}</td>




                        <td class="border border-black border px-4 py-2 text-center text-xs">{{ $certificate->status }}</td>
                        <td class="border border-black border px-4 py-2 text-center text-xs">{{ $certificate->result }}</td>


                    </tr>
                    @endforeach

                </tbody>
            </table>

            {{ $certificates->links() }}
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