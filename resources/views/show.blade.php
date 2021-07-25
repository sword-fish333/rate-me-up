<x-app-layout>
    <div>
        <a href="/" class="flex items-center font-semibold hover:underline">
            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
            <span class="ml-2">All ideas</span>
        </a>
    </div>
    <div
        class="idea-container mt-4 bg-white rounded-xl flex">

        <div class="flex flex-1 px-4 py-6">
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
                <div class="text-gray-600 mt-3">Lorem ipsu Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. A aliquam autem beatae corporis cum cupiditate dolorum ea eum expedita explicabo
                    facere facilis fuga hic, id impedit in ipsum iure magni modi necessitatibus neque perferendis porro
                    possimus quas qui quidem tempore unde velit vitae voluptatum. Autem dolore eius incidunt nostrum
                    placeat!
                </div>
                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                        <div class="font-bold text-gray-900">John Doe</div>
                        <div>&bull;</div>
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
                            <ul class="absolute hidden text-left ml-8 w-44 font-semibold bg-white shadow-lg rounded-xl py-3">
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
    {{--    end idea container--}}
    <div class="buttons-container flex items-center justify-between mt-6">
        <div class="flex items-center space-x-4 ml-6">
            <button type="submit"
                    class="flex items-center justify-center w-32 h-11 text-xs  border-2  font-semibold border-blue text-white bg-blue transition duration-200 ease-in-out bg-blue hover:bg-blue-hover rounded-xl px-4 py-3">

                <span>Reply</span>
            </button>
            <button type="button"
                    class="flex items-center justify-center w-36 h-11 text-xs bg-gray-200 border-2  font-semibold border-gray-200 hover:border-gray-400 transition duration-200 ease-in rounded-xl px-4 py-3">

                <span>Set status</span>
                <svg class="h-4 w-4 ml-2 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
        </div>
        <div class="flex items-center space-x-3">
            <div class="bg-white font-semibold text-center rounded-xl px-3 py-2">
                <div class="text-xl leading-snug">12</div>
                <div class="text-gray-400 text-xs leading-none">
                    Votes
                </div>
            </div>
            <button type="button"
                    class="w-32 h-11 text-xs bg-gray-200 border-2  font-semibold uppercase border-gray-200 hover:border-gray-400 transition duration-200 ease-in rounded-xl px-4 py-3">

                <span>Vote</span>

            </button>
        </div>
    </div>
    <div class="comments-container relative space-y-6 ml-22 my-8 pt-4 mt-1">
        <div
            class="comment-container relative mt-4 bg-white rounded-xl flex">

            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                             class="w-14 h-14 rounded-xl">
                    </a>

                </div>
                <div class="w-full mx-4">
                    <h4 class="text-xl font-semibold">
                        {{--                        <a href="#" class="hover:underline">A random title</a>--}}
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">Lorem ipsu
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>10 hours ago</div>

                        </div>
                        <div class="flex items-center space-x-2">

                            <button
                                class="relative bg-gray-100 border hover:bg-gray-200 rounded-full h-7 py-2 px-4 transition duration-200 ease-in">
                                <svg xmlns="http://www.w3.org/2000/svg" style="margin-top: -6px" class="h-6 w-6"
                                     fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"/>
                                </svg>
                                <ul class="absolute hidden text-left ml-8 w-44 font-semibold bg-white shadow-lg rounded-xl py-3">
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
            class="comment-container is-status-update relative mt-4 bg-white rounded-xl flex">

            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                             class="w-14 h-14 rounded-xl">
                    </a>
            <div class="text-center uppercase text-blue text-xxs font-bold mt-1">Admin</div>
                </div>
                <div class="w-full mx-4">
                    <h4 class="text-xl font-semibold">
                                                <a href="#" class="hover:underline">Status changed to "Under Consideration"</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">Lorem ipsu
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-blue">Andrea</div>
                            <div>10 hours ago</div>

                        </div>
                        <div class="flex items-center space-x-2">

                            <button
                                class="relative bg-gray-100 border hover:bg-gray-200 rounded-full h-7 py-2 px-4 transition duration-200 ease-in">
                                <svg xmlns="http://www.w3.org/2000/svg" style="margin-top: -6px" class="h-6 w-6"
                                     fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"/>
                                </svg>
                                <ul class="absolute hidden text-left ml-8 w-44 font-semibold bg-white shadow-lg rounded-xl py-3">
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
            class="comment-container relative mt-4 bg-white rounded-xl flex">

            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                             class="w-14 h-14 rounded-xl">
                    </a>

                </div>
                <div class="w-full mx-4">
                    <h4 class="text-xl font-semibold">
                        {{--                        <a href="#" class="hover:underline">A random title</a>--}}
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">Lorem ipsu
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>10 hours ago</div>

                        </div>
                        <div class="flex items-center space-x-2">

                            <button
                                class="relative bg-gray-100 border hover:bg-gray-200 rounded-full h-7 py-2 px-4 transition duration-200 ease-in">
                                <svg xmlns="http://www.w3.org/2000/svg" style="margin-top: -6px" class="h-6 w-6"
                                     fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"/>
                                </svg>
                                <ul class="absolute hidden text-left ml-8 w-44 font-semibold bg-white shadow-lg rounded-xl py-3">
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
</x-app-layout>
