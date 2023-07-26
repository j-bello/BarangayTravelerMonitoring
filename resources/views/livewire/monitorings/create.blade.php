
<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>
        <div class="md:w-auto inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-screen-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
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
                            <input type="text" disabled class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Enter Last Name" wire:model="lastName">
                            @error('lastName') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>

                    </div>



                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/5 px-3 mb-6 md:mb-0">
                            <label for="exampleFormControlInput1" class="block text-black text-sm font-bold mb-2">Day 1:</label>
                            <select id="day_one" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="day_one"  placeholder="" wire:model="day_one" multiple>
                                <option value="None">None</option>
                                <option value="Fever">Fever</option>
                                <option value="Dry Cough">Dry Cough</option>
                                <option value="Tiredness">Tiredness</option>
                                <option value="Aches and pains">Aches and pains</option>
                                <option value="Sore throat">Sore throat</option>
                                <option value="Diarrhea">Diarrhea</option>
                                <option value="Conjunctivities">Conjunctivities</option>
                                <option value="Headache">Headache</option>
                                <option value="Loss of taste">Loss of taste</option>
                                <option value="Loss of smell">Loss of smell</option>
                                <option value="Skin Rash">Skin Rash</option>

                                </select>
                                @error('day_one') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="w-full md:w-1/5 px-3 mb-6 md:mb-0">
                            <label for="exampleFormControlInput1" class="block text-black text-sm font-bold mb-2">Day 2:</label>
                            <select id="day_two" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="day_two"  placeholder="" wire:model="day_two" multiple>
                                <option value="None">None</option>
                                <option value="Fever">Fever</option>
                                <option value="Dry Cough">Dry Cough</option>
                                <option value="Tiredness">Tiredness</option>
                                <option value="Aches and pains">Aches and pains</option>
                                <option value="Sore throat">Sore throat</option>
                                <option value="Diarrhea">Diarrhea</option>
                                <option value="Conjunctivities">Conjunctivities</option>
                                <option value="Headache">Headache</option>
                                <option value="Loss of taste">Loss of taste</option>
                                <option value="Loss of smell">Loss of smell</option>
                                <option value="Skin Rash">Skin Rash</option>

                                </select>
                                @error('day_two') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="w-full md:w-1/5 px-3 mb-6 md:mb-0">
                            <label for="exampleFormControlInput1" class="block text-black text-sm font-bold mb-2">Day 3:</label>
                            <select id="day_three" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="day_three"  placeholder="" wire:model="day_three" multiple>
                                <option value="None">None</option>

                                <option value="Fever">Fever</option>
                                <option value="Dry Cough">Dry Cough</option>
                                <option value="Tiredness">Tiredness</option>
                                <option value="Aches and pains">Aches and pains</option>
                                <option value="Sore throat">Sore throat</option>
                                <option value="Diarrhea">Diarrhea</option>
                                <option value="Conjunctivities">Conjunctivities</option>
                                <option value="Headache">Headache</option>
                                <option value="Loss of taste">Loss of taste</option>
                                <option value="Loss of smell">Loss of smell</option>
                                <option value="Skin Rash">Skin Rash</option>

                                </select>
                                @error('day_three') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="w-full md:w-1/5 px-3 mb-6 md:mb-0">
                            <label for="exampleFormControlInput1" class="block text-black text-sm font-bold mb-2">Day 4:</label>
                            <select id="day_four" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="day_four"  placeholder="" wire:model="day_four" multiple>
                                <option value="None">None</option>

                                <option value="Fever">Fever</option>
                                <option value="Dry Cough">Dry Cough</option>
                                <option value="Tiredness">Tiredness</option>
                                <option value="Aches and pains">Aches and pains</option>
                                <option value="Sore throat">Sore throat</option>
                                <option value="Diarrhea">Diarrhea</option>
                                <option value="Conjunctivities">Conjunctivities</option>
                                <option value="Headache">Headache</option>
                                <option value="Loss of taste">Loss of taste</option>
                                <option value="Loss of smell">Loss of smell</option>
                                <option value="Skin Rash">Skin Rash</option>

                                </select>
                                @error('day_four') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="w-full md:w-1/5 px-3 mb-6 md:mb-0">
                            <label for="exampleFormControlInput1" class="block text-black text-sm font-bold mb-2">Day 5:</label>
                            <select id="day_five" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="day_five"  placeholder="" wire:model="day_five" multiple>
                                <option value="None">None</option>

                                <option value="Fever">Fever</option>
                                <option value="Dry Cough">Dry Cough</option>
                                <option value="Tiredness">Tiredness</option>
                                <option value="Aches and pains">Aches and pains</option>
                                <option value="Sore throat">Sore throat</option>
                                <option value="Diarrhea">Diarrhea</option>
                                <option value="Conjunctivities">Conjunctivities</option>
                                <option value="Headache">Headache</option>
                                <option value="Loss of taste">Loss of taste</option>
                                <option value="Loss of smell">Loss of smell</option>
                                <option value="Skin Rash">Skin Rash</option>

                                </select>
                                @error('day_five') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>


                        <div class="w-full md:w-1/5 px-3 mb-6 md:mb-0">
                            <label for="exampleFormControlInput1" class="block text-black text-sm font-bold mb-2">Day 6:</label>
                            <select id="day_six" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="day_six"  placeholder="" wire:model="day_six" multiple>
                                <option value="None">None</option>

                                <option value="Fever">Fever</option>
                                <option value="Dry Cough">Dry Cough</option>
                                <option value="Tiredness">Tiredness</option>
                                <option value="Aches and pains">Aches and pains</option>
                                <option value="Sore throat">Sore throat</option>
                                <option value="Diarrhea">Diarrhea</option>
                                <option value="Conjunctivities">Conjunctivities</option>
                                <option value="Headache">Headache</option>
                                <option value="Loss of taste">Loss of taste</option>
                                <option value="Loss of smell">Loss of smell</option>
                                <option value="Skin Rash">Skin Rash</option>

                                </select>
                                @error('day_six') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="w-full md:w-1/5 px-3 mb-6 md:mb-0">
                            <label for="exampleFormControlInput1" class="block text-black text-sm font-bold mb-2">Day 7:</label>
                            <select id="day_seven" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="day_seven"  placeholder="" wire:model="day_seven" multiple>
                                <option value="None">None</option>

                                <option value="Fever">Fever</option>
                                <option value="Dry Cough">Dry Cough</option>
                                <option value="Tiredness">Tiredness</option>
                                <option value="Aches and pains">Aches and pains</option>
                                <option value="Sore throat">Sore throat</option>
                                <option value="Diarrhea">Diarrhea</option>
                                <option value="Conjunctivities">Conjunctivities</option>
                                <option value="Headache">Headache</option>
                                <option value="Loss of taste">Loss of taste</option>
                                <option value="Loss of smell">Loss of smell</option>
                                <option value="Skin Rash">Skin Rash</option>

                                </select>
                                @error('day_seven') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="w-full md:w-1/5 px-3 mb-6 md:mb-0">
                            <label for="exampleFormControlInput1" class="block text-black text-sm font-bold mb-2">Day 8:</label>
                            <select id="day_eight" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="day_eight"  placeholder="" wire:model="day_eight" multiple>
                                <option value="None">None</option>

                                <option value="Fever">Fever</option>
                                <option value="Dry Cough">Dry Cough</option>
                                <option value="Tiredness">Tiredness</option>
                                <option value="Aches and pains">Aches and pains</option>
                                <option value="Sore throat">Sore throat</option>
                                <option value="Diarrhea">Diarrhea</option>
                                <option value="Conjunctivities">Conjunctivities</option>
                                <option value="Headache">Headache</option>
                                <option value="Loss of taste">Loss of taste</option>
                                <option value="Loss of smell">Loss of smell</option>
                                <option value="Skin Rash">Skin Rash</option>

                                </select>
                                @error('day_eight') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="w-full md:w-1/5 px-3 mb-6 md:mb-0">
                            <label for="exampleFormControlInput1" class="block text-black text-sm font-bold mb-2">Day 9:</label>
                            <select id="day_nine" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="day_nine"  placeholder="" wire:model="day_nine" multiple>
                                <option value="None">None</option>

                                <option value="Fever">Fever</option>
                                <option value="Dry Cough">Dry Cough</option>
                                <option value="Tiredness">Tiredness</option>
                                <option value="Aches and pains">Aches and pains</option>
                                <option value="Sore throat">Sore throat</option>
                                <option value="Diarrhea">Diarrhea</option>
                                <option value="Conjunctivities">Conjunctivities</option>
                                <option value="Headache">Headache</option>
                                <option value="Loss of taste">Loss of taste</option>
                                <option value="Loss of smell">Loss of smell</option>
                                <option value="Skin Rash">Skin Rash</option>

                                </select>
                                @error('day_nine') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="w-full md:w-1/5 px-3 mb-6 md:mb-0">
                            <label for="exampleFormControlInput1" class="block text-black text-sm font-bold mb-2">Day 10:</label>
                            <select id="day_ten" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="day_ten"  placeholder="" wire:model="day_ten" multiple>
                                <option value="None">None</option>

                                <option value="Fever">Fever</option>
                                <option value="Dry Cough">Dry Cough</option>
                                <option value="Tiredness">Tiredness</option>
                                <option value="Aches and pains">Aches and pains</option>
                                <option value="Sore throat">Sore throat</option>
                                <option value="Diarrhea">Diarrhea</option>
                                <option value="Conjunctivities">Conjunctivities</option>
                                <option value="Headache">Headache</option>
                                <option value="Loss of taste">Loss of taste</option>
                                <option value="Loss of smell">Loss of smell</option>
                                <option value="Skin Rash">Skin Rash</option>

                                </select>
                                @error('day_ten') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
                            <label for="exampleFormControlInput1" class="block text-black text-sm font-bold mb-2">Day 11:</label>
                            <select id="day_eleven" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="day_eleven"  placeholder="" wire:model="day_eleven" multiple>
                                <option value="None">None</option>

                                <option value="Fever">Fever</option>
                                <option value="Dry Cough">Dry Cough</option>
                                <option value="Tiredness">Tiredness</option>
                                <option value="Aches and pains">Aches and pains</option>
                                <option value="Sore throat">Sore throat</option>
                                <option value="Diarrhea">Diarrhea</option>
                                <option value="Conjunctivities">Conjunctivities</option>
                                <option value="Headache">Headache</option>
                                <option value="Loss of taste">Loss of taste</option>
                                <option value="Loss of smell">Loss of smell</option>
                                <option value="Skin Rash">Skin Rash</option>

                                </select>
                                @error('day_eleven') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
                            <label for="exampleFormControlInput1" class="block text-black text-sm font-bold mb-2">Day 12:</label>
                            <select id="day_twelve" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="day_twelve"  placeholder="" wire:model="day_twelve" multiple>
                                <option value="None">None</option>

                                <option value="Fever">Fever</option>
                                <option value="Dry Cough">Dry Cough</option>
                                <option value="Tiredness">Tiredness</option>
                                <option value="Aches and pains">Aches and pains</option>
                                <option value="Sore throat">Sore throat</option>
                                <option value="Diarrhea">Diarrhea</option>
                                <option value="Conjunctivities">Conjunctivities</option>
                                <option value="Headache">Headache</option>
                                <option value="Loss of taste">Loss of taste</option>
                                <option value="Loss of smell">Loss of smell</option>
                                <option value="Skin Rash">Skin Rash</option>

                                </select>
                                @error('day_twelve') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
                            <label for="exampleFormControlInput1" class="block text-black text-sm font-bold mb-2">Day 13:</label>
                            <select id="day_thirteen" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="day_thirteen"  placeholder="" wire:model="day_thirteen" multiple>
                                <option value="None">None</option>

                                <option value="Fever">Fever</option>
                                <option value="Dry Cough">Dry Cough</option>
                                <option value="Tiredness">Tiredness</option>
                                <option value="Aches and pains">Aches and pains</option>
                                <option value="Sore throat">Sore throat</option>
                                <option value="Diarrhea">Diarrhea</option>
                                <option value="Conjunctivities">Conjunctivities</option>
                                <option value="Headache">Headache</option>
                                <option value="Loss of taste">Loss of taste</option>
                                <option value="Loss of smell">Loss of smell</option>
                                <option value="Skin Rash">Skin Rash</option>

                                </select>
                                @error('day_thirteen') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
                            <label for="exampleFormControlInput1" class="block text-black text-sm font-bold mb-2">Day 14:</label>
                            <select id="day_fourteen" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="day_fourteen"  placeholder="" wire:model="day_fourteen" multiple>
                                                              <option value="None">None</option>

                                <option value="Fever">Fever</option>
                                <option value="Dry Cough">Dry Cough</option>
                                <option value="Tiredness">Tiredness</option>
                                <option value="Aches and pains">Aches and pains</option>
                                <option value="Sore throat">Sore throat</option>
                                <option value="Diarrhea">Diarrhea</option>
                                <option value="Conjunctivities">Conjunctivities</option>
                                <option value="Headache">Headache</option>
                                <option value="Loss of taste">Loss of taste</option>
                                <option value="Loss of smell">Loss of smell</option>
                                <option value="Skin Rash">Skin Rash</option>

                                </select>
                                @error('day_fourteen') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>

                    </div>




                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label for="exampleFormControlInput1" class="block text-black text-sm font-bold mb-2">Status:</label>
                            <select id="status" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="status"  placeholder="Enter Status" wire:model="status">
                                <option value="">-Select Status-</option>
                                <option value="Monitoring">Monitoring</option>
                                <option value="In Testing">In Testing</option>
                                <option value="Cleared">Cleared</option>
                                </select>
                                @error('status') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label for="exampleFormControlInput1" class="block text-black text-sm font-bold mb-2">Result:</label>
                            <select id="result" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="result"  placeholder="Enter Result" wire:model="result">
                                <option value="">-Select Result-</option>
                                <option value="N/A">N/A</option>
                                <option value="Positive">Positive</option>
                                <option value="Negative">Negative</option>
                                </select>
                                @error('result') <span class="text-red-500">{{ $message }}</span>@enderror
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
