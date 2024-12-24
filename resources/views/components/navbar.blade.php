<nav class="bg-black sticky top-0 z-50">
  <div class="container mx-auto">
    <div class="flex w-full items-center justify-center  lg:justify-between px-32 py-5">
        <!-- Left elements -->
        
        <!-- Center elements -->
    
    
        <!-- Center elements -->
        <div>
            <!-- Brand -->
            <a class="mx-auto hidden lg:flex items-center mb-0 mt-0" href="/">
                <img class="h-5 lg:h-20" src="/ass/logoX-01.png" alt="RITM">
            </a>
        </div>
        <!-- Center elements -->
    
        <!-- Right elements -->
        <ul
          class="list-style-none  flex-row ps-0 flex" >
    
          <li class="px-2">
            <a href="/" class="text-xs lg:text-base {{ Request::is('/') ? 'text-[#F0A405]' : 'text-white/60' }} transition duration-200 hover:text-white/80 hover:ease-in-out focus:text-white/80 active:text-white/80 motion-reduce:transition-none">
                Home
            </a>
          </li>
          <li class="px-2">
            <a href="/game" class="text-xs lg:text-base {{ Request::is('game') ? 'text-[#F0A405]' : 'text-white/60' }} transition duration-200 hover:text-white/80 hover:ease-in-out focus:text-white/80 active:text-white/80 motion-reduce:transition-none">
                Game
            </a>
          </li>
          <li class="px-2">
            <a href="/teams" class="text-xs lg:text-base {{ Request::is('teams') ? 'text-[#F0A405]' : 'text-white/60' }} transition duration-200 hover:text-white/80 hover:ease-in-out focus:text-white/80 active:text-white/80 motion-reduce:transition-none">
                Teams
            </a>
          </li>
          <li class="px-2">
            <a href="/award" class="text-xs lg:text-base {{ Request::is('award') ? 'text-[#F0A405]' : 'text-white/60' }} transition duration-200 hover:text-white/80 hover:ease-in-out focus:text-white/80 active:text-white/80 motion-reduce:transition-none">
                Award
            </a>
          </li>
        </ul>

        <ul
          class="list-style-none hidden flex-row ps-0 ">
          <li class="px-2">
            <a href="#" class="text-[#F0A405] transition duration-200 hover:text-white/80 hover:ease-in-out focus:text-white/80 active:text-white/80 motion-reduce:transition-none">
              <span class="[&>svg]:h-6 [&>svg]:w-6">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 20 20"
                  fill="currentColor">
                  <path
                    fill-rule="evenodd"
                    d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z"
                    clip-rule="evenodd" />
                </svg>
              </span>
              <!-- Notification counter -->
              {{-- <span
                class="absolute -mt-7 ms-4 rounded-full bg-danger px-[0.50em] py-[0.25em] text-[0.6rem] font-bold leading-none text-white"
                >1</span
              > --}}
            </a>
          </li>
          <li class="px-2">
            <a href="#" class="text-[#F0A405] transition duration-200 hover:text-white/80 hover:ease-in-out focus:text-white/80 active:text-white/80 motion-reduce:transition-none">
              <span class="[&>svg]:h-6 [&>svg]:w-6">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 20 20"
                  fill="currentColor">
                  <path
                    fill-rule="evenodd"
                    d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z"
                    clip-rule="evenodd" />
                </svg>
              </span>
              <!-- Notification counter -->
              {{-- <span
                class="absolute -mt-7 ms-4 rounded-full bg-danger px-[0.50em] py-[0.25em] text-[0.6rem] font-bold leading-none text-white"
                >1</span
              > --}}
            </a>
          </li>
          <li class="px-2">
            <a href="#" class="text-[#F0A405] transition duration-200 hover:text-white/80 hover:ease-in-out focus:text-white/80 active:text-white/80 motion-reduce:transition-none">
              <span class="[&>svg]:h-6 [&>svg]:w-6">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 20 20"
                  fill="currentColor">
                  <path
                    fill-rule="evenodd"
                    d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z"
                    clip-rule="evenodd" />
                </svg>
              </span>
              <!-- Notification counter -->
              {{-- <span
                class="absolute -mt-7 ms-4 rounded-full bg-danger px-[0.50em] py-[0.25em] text-[0.6rem] font-bold leading-none text-white"
                >1</span
              > --}}
            </a>
          </li>
          <li class="px-2">
            <a href="#" class="text-[#F0A405] transition duration-200 hover:text-white/80 hover:ease-in-out focus:text-white/80 active:text-white/80 motion-reduce:transition-none">
              <span class="[&>svg]:h-6 [&>svg]:w-6">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 20 20"
                  fill="currentColor">
                  <path
                    fill-rule="evenodd"
                    d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z"
                    clip-rule="evenodd" />
                </svg>
              </span>
              <!-- Notification counter -->
              {{-- <span
                class="absolute -mt-7 ms-4 rounded-full bg-danger px-[0.50em] py-[0.25em] text-[0.6rem] font-bold leading-none text-white"
                >1</span
              > --}}
            </a>
          </li>
        </ul>
        <!-- Right elements -->
      </div>
  </div>
</nav>