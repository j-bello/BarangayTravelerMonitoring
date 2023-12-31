<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form>
                <div class="bg-blue-300 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">



                    <div class="">
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label for="exampleFormControlInput1" class="block text-black text-sm font-bold mb-2">First Name:</label>
                            <input type="text" disabled class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Enter First Name" wire:model="firstName">
                            @error('firstName') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label for="exampleFormControlInput1" class="block text-black text-sm font-bold mb-2">Last Name:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Enter Last Name" wire:model="lastName">
                            @error('lastName') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                    </div>


                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label for="exampleFormControlInput1" class="block text-black text-sm font-bold mb-2">Arrival Date:</label>
                            <input type="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Enter Date" wire:model="arrival_date">
                            @error('arrival_date') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label for="exampleFormControlInput1" class="block text-black text-sm font-bold mb-2">Release Date:</label>
                            <input type="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Enter Date" wire:model="release_date">
                            @error('release_date') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                    </div>





                        <div class="mb-4">
                            <label for="exampleFormControlInput1" class="block text-black text-sm font-bold mb-2">Address:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Enter Address" wire:model="address">
                            @error('address') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>


                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label for="exampleFormControlInput1" class="block text-black text-sm font-bold mb-2">Sex:</label>
                            <select id="sex" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="sex"  placeholder="Enter Sex" wire:model="sex">
                                <option value="">-Select Sex-</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                </select>
                                @error('sex') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label for="exampleFormControlInput1" class="block text-black text-sm font-bold mb-2">Age:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Enter Age" wire:model="age">
                            @error('age') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                    </div>



                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label for="exampleFormControlInput1" class="block text-black text-sm font-bold mb-2">Date of Birth:</label>
                            <input type="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Enter Date" wire:model="date_of_birth">
                            @error('date_of_birth') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label for="exampleFormControlInput1" class="block text-black text-sm font-bold mb-2">Contact No.:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Enter Contact Number" wire:model="contactNo">
                            @error('contactNo') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>

        </div>
                <div class="bg-blue-300 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                        <button wire:click.prevent="store()" type="button" onclick="return confirm('Save Record?')" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-black text-base leading-6 font-medium text-white shadow-sm hover:bg-gray-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                        Save
                        </button>
                    </span>
                    <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
                        <button wire:click="closeModal()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-black text-white leading-6 font-medium text-white shadow-sm hover:bg-gray-700 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                            Cancel
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>
