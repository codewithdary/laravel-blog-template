
<nav class="bg-transparent border-gray-200 px-2 sm:px-4 py-2.5 rounded">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
      <a href="{{ route('index') }}" class="flex items-center">
        <span class="self-center text-xl font-semibold whitespace-nowrap text-white">
            <i class="fa-solid fa-recycle mr-3 h-6 text-2xl sm:h-9"></i>
            Components
          </span>
      </a>
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-transparent">
          <li>
            <a 
              href="{{ route('contact') }}" 
              class="p-1 font-medium text-gray-900 dark:text-gray-100 sm:p-4" aria-current="page">
                Contact
            </a>
          </li>       
          <li>
            <a 
                href="/" 
                class="block text-xl py-2 pr-4 pl-3 text-md text-white  rounded md:bg-transparent md:text-white-700 md:p-0 dark:text-white" aria-current="page">
                <i class="fa-brands fa-youtube"></i>
            </a>
          </li>        
        </ul>
      </div>
    </div>
  </nav>
  