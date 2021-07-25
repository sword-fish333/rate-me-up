<x-app-layout>

    <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select name="category" id="category" class="w-full border-none rounded-xl px-4 py-2">
                <option value="Category one">Category one</option>
                <option value="Category two">Category two</option>
                <option value="Category three">Category three</option>
                <option value="Category four">Category four</option>
            </select>
        </div>
        <div class="w-1/3">
            <select name="other_filters" id="other_filters" class="w-full border-none rounded-xl px-4 py-2">
                <option value="Filter one">Filter one</option>
                <option value="Filter two">Filter two</option>
                <option value="Filter three">Filter three</option>
                <option value="Filter four">Filter four</option>
            </select>
        </div>
        <div class="w-2/3 relative">

            <input type="search" placeholder="Find an idea"
                   class="placeholder:text-gray-900 w-full rounded-xl bg-white px-4 py-2 pl-8 border-none">
            <div class="absolute top-0 flex h-full ml-2">
                <svg class="w-4 text-gray-700" className="h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2}
                          d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
            </div>
        </div>
    </div>
    {{--    end filters--}}
    <div class="ideas-container space-y-6 my-6">
        <div
            class="idea-container cursor-pointer hover:shadow-md transition duration-150 ease-in bg-white rounded-xl flex">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">votes</div>
                </div>
                <div class="mt-8">
                    <button
                        class="w-20 bg-gray-200 text-xxs border border-gray-200 hover:border-gray-400 transition duration-200 ease-in font-bold uppercase rounded-xl px-4 py-3">
                        Voted
                    </button>
                </div>
            </div>
            <div class="flex flex-1 px-2 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                             class="w-14 h-14 rounded-xl">
                    </a>

                </div>
                <div class="w-full mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">Lorem ipsu
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">2 Comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div
                                class="bg-gray-200 text-xxs leading-none text-center
                                font-bold uppercase rounded-full w-28 h-7 py-2 px-4">
                                Open
                            </div>
                            <button
                                class="relative bg-gray-100 border hover:bg-gray-200 rounded-full h-7 py-2 px-4 transition duration-200 ease-in">
                                <svg xmlns="http://www.w3.org/2000/svg" style="margin-top: -6px" class="h-6 w-6"
                                     fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"/>
                                </svg>
                                <ul class="absolute text-left ml-8 w-44 font-semibold bg-white shadow-lg rounded-xl py-3">
                                    <li><a href="#"
                                           class="hover:bg-gray-100 transition block duration-150 ease-in px-5 py-3">Mark
                                            as spam</a></li>
                                    <li><a href="#"
                                           class="hover:bg-gray-100 transition block duration-150 ease-in px-5 py-3">Delete
                                            post</a></li>

                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="idea-container cursor-pointer hover:shadow-md transition duration-150 ease-in bg-white rounded-xl flex">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">votes</div>
                </div>
                <div class="mt-8">
                    <button
                        class="w-20 bg-blue text-white text-xxs border border-blue-200 hover:border-blue-400 transition duration-200 ease-in font-bold uppercase rounded-xl px-4 py-3">
                        Voted
                    </button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                         class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit.
                        Accusantium cupiditate exercitationem voluptas. At consequatur cum, dolores, dolorum eum
                        exercitationem hic ipsam libero neque officiis optio placeat possimus, quidem reiciendis tempore
                        totam voluptates? Ab aut blanditiis debitis dolor dolore eveniet, facilis ipsam nam nisi
                        perferendis, porro ratione recusandae tenetur. A accusamus adipisci at, corporis dignissimos
                        distinctio eaque eligendi enim est excepturi explicabo illo incidunt ipsa magnam modi molestiae
                        nulla obcaecati porro qui quisquam quos reprehenderit repudiandae rerum sunt voluptatibus. A
                        alias, asperiores, autem cum id iure modi nemo nesciunt placeat quibusdam quod repellendus sit
                        vero. Alias aliquam asperiores est laudantium libero!
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">2 Comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div
                                class="bg-gray-200 text-xxs leading-none text-center
                                font-bold uppercase rounded-full w-28 h-7 py-2 px-4">
                                Open
                            </div>
                            <button
                                class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 py-2 px-4 transition duration-200 ease-in">
                                <svg xmlns="http://www.w3.org/2000/svg" style="margin-top: -6px" class="h-6 w-6"
                                     fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"/>
                                </svg>
                                <ul class="absolute text-left ml-8 w-44 font-semibold bg-white shadow-lg rounded-xl py-3">
                                    <li><a href="#"
                                           class="hover:bg-gray-100 transition block duration-150 ease-in px-5 py-3">Mark
                                            as spam</a></li>
                                    <li><a href="#"
                                           class="hover:bg-gray-100 transition block duration-150 ease-in px-5 py-3">Delete
                                            post</a></li>

                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="idea-container cursor-pointer hover:shadow-md transition duration-150 ease-in bg-white rounded-xl flex">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">votes</div>
                </div>
                <div class="mt-8">
                    <button
                        class="w-20 bg-gray-200 text-xxs border border-gray-200 hover:border-gray-400 transition duration-200 ease-in font-bold uppercase rounded-xl px-4 py-3">
                        Vote
                    </button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                         class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit.
                        Accusantium cupiditate exercitationem voluptas. At consequatur cum, dolores, dolorum eum
                        exercitationem hic ipsam libero neque officiis optio placeat possimus, quidem reiciendis tempore
                        totam voluptates? Ab aut blanditiis debitis dolor dolore eveniet, facilis ipsam nam nisi
                        perferendis, porro ratione recusandae tenetur. A accusamus adipisci at, corporis dignissimos
                        distinctio eaque eligendi enim est excepturi explicabo illo incidunt ipsa magnam modi molestiae
                        nulla obcaecati porro qui quisquam quos reprehenderit repudiandae rerum sunt voluptatibus. A
                        alias, asperiores, autem cum id iure modi nemo nesciunt placeat quibusdam quod repellendus sit
                        vero. Alias aliquam asperiores est laudantium libero!
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">2 Comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div
                                class="bg-gray-200 text-xxs leading-none text-center
                                font-bold uppercase rounded-full w-28 h-7 py-2 px-4">
                                Open
                            </div>
                            <button
                                class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 py-2 px-4 transition duration-200 ease-in">
                                <svg xmlns="http://www.w3.org/2000/svg" style="margin-top: -6px" class="h-6 w-6"
                                     fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"/>
                                </svg>
                                <ul class="absolute text-left ml-8 w-44 font-semibold bg-white shadow-lg rounded-xl py-3">
                                    <li><a href="#"
                                           class="hover:bg-gray-100 transition block duration-150 ease-in px-5 py-3">Mark
                                            as spam</a></li>
                                    <li><a href="#"
                                           class="hover:bg-gray-100 transition block duration-150 ease-in px-5 py-3">Delete
                                            post</a></li>

                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="idea-container cursor-pointer hover:shadow-md transition duration-150 ease-in bg-white rounded-xl flex">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">votes</div>
                </div>
                <div class="mt-8">
                    <button
                        class="w-20 bg-gray-200 text-xxs border border-gray-200 hover:border-gray-400 transition duration-200 ease-in font-bold uppercase rounded-xl px-4 py-3">
                        Vote
                    </button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                         class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit.
                        Accusantium cupiditate exercitationem voluptas. At consequatur cum, dolores, dolorum eum
                        exercitationem hic ipsam libero neque officiis optio placeat possimus, quidem reiciendis tempore
                        totam voluptates? Ab aut blanditiis debitis dolor dolore eveniet, facilis ipsam nam nisi
                        perferendis, porro ratione recusandae tenetur. A accusamus adipisci at, corporis dignissimos
                        distinctio eaque eligendi enim est excepturi explicabo illo incidunt ipsa magnam modi molestiae
                        nulla obcaecati porro qui quisquam quos reprehenderit repudiandae rerum sunt voluptatibus. A
                        alias, asperiores, autem cum id iure modi nemo nesciunt placeat quibusdam quod repellendus sit
                        vero. Alias aliquam asperiores est laudantium libero!
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">2 Comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div
                                class="bg-gray-200 text-xxs leading-none text-center
                                font-bold uppercase rounded-full w-28 h-7 py-2 px-4">
                                Open
                            </div>
                            <button
                                class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 py-2 px-4 transition duration-200 ease-in">
                                <svg xmlns="http://www.w3.org/2000/svg" style="margin-top: -6px" class="h-6 w-6"
                                     fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"/>
                                </svg>
                                <ul class="absolute text-left ml-8 w-44 font-semibold bg-white shadow-lg rounded-xl py-3">
                                    <li><a href="#"
                                           class="hover:bg-gray-100 transition block duration-150 ease-in px-5 py-3">Mark
                                            as spam</a></li>
                                    <li><a href="#"
                                           class="hover:bg-gray-100 transition block duration-150 ease-in px-5 py-3">Delete
                                            post</a></li>

                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--    end ideas container--}}

</x-app-layout>
