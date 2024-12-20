 @extends('admin.layouts.master')
 @section('content')
     <div>
         <!-- ===== Data Stats Start ===== -->
         <div class="mb-8 flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
             <div>
                 <h2 class="text-title-sm2 font-bold text-black dark:text-white">
                     This Week’s Overview
                 </h2>
             </div>

             <div class="flex items-center">
                 <p class="font-medium uppercase text-black dark:text-white">
                     Short by:
                 </p>
                 <div class="relative z-20 inline-block">
                     <select name="#" id="#"
                         class="relative z-20 inline-flex appearance-none bg-transparent py-1 pl-3 pr-8 font-medium outline-none">
                         <option value="">Current Week</option>
                         <option value="">Last Week</option>
                     </select>
                     <span class="absolute right-1 top-1/2 z-10 -translate-y-1/2">
                         <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                             <path
                                 d="M8.99995 12.8249C8.8312 12.8249 8.69058 12.7687 8.54995 12.6562L2.0812 6.2999C1.82808 6.04678 1.82808 5.65303 2.0812 5.3999C2.33433 5.14678 2.72808 5.14678 2.9812 5.3999L8.99995 11.278L15.0187 5.34365C15.2718 5.09053 15.6656 5.09053 15.9187 5.34365C16.1718 5.59678 16.1718 5.99053 15.9187 6.24365L9.44995 12.5999C9.30933 12.7405 9.1687 12.8249 8.99995 12.8249Z"
                                 fill="#64748B" />
                         </svg>
                     </span>
                 </div>
             </div>
         </div>

         <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:gap-6 xl:grid-cols-3 2xl:gap-7.5">
             <div
                 class="rounded-sm border border-stroke bg-white p-4 shadow-default dark:border-strokedark dark:bg-boxdark md:p-6 xl:p-7.5">
                 <div class="flex items-end justify-between">
                     <div>
                         <h3 class="mb-4 text-title-lg font-bold text-black dark:text-white">
                             197
                         </h3>
                         <p class="font-medium">Clients Added</p>
                         <span class="mt-2 flex items-center gap-2">
                             <span class="flex items-center gap-1 rounded-md bg-meta-3 p-1 text-xs font-medium text-white">
                                 <svg width="14" height="15" viewBox="0 0 14 15" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                     <path
                                         d="M13.0155 5.24683H9.49366C9.23116 5.24683 9.01241 5.46558 9.01241 5.72808C9.01241 5.99058 9.23116 6.20933 9.49366 6.20933H11.6593L8.85928 8.09058C8.74991 8.17808 8.59678 8.17808 8.46553 8.09058L5.57803 6.18745C5.11866 5.8812 4.54991 5.8812 4.09053 6.18745L0.721783 8.44058C0.503033 8.5937 0.437408 8.89995 0.590533 9.1187C0.678033 9.24995 0.831157 9.33745 1.00616 9.33745C1.09366 9.33745 1.20303 9.31558 1.26866 9.24995L4.65928 6.99683C4.76866 6.90933 4.92178 6.90933 5.05303 6.99683L7.94053 8.92183C8.39991 9.22808 8.96866 9.22808 9.42803 8.92183L12.5124 6.8437V9.27183C12.5124 9.53433 12.7312 9.75308 12.9937 9.75308C13.2562 9.75308 13.4749 9.53433 13.4749 9.27183V5.72808C13.5187 5.46558 13.278 5.24683 13.0155 5.24683Z"
                                         fill="white" />
                                 </svg>
                                 <span>+2.5%</span>
                             </span>

                             <span class="text-sm font-medium">Since last week</span>
                         </span>
                     </div>

                     <div x-data="{ percent: 60 }">
                         <svg class="h-17.5 w-17.5 -rotate-90 transform">
                             <circle class="text-stroke dark:text-strokedark" stroke-width="10" stroke="currentColor"
                                 fill="transparent" r="30" cx="35" cy="35" />
                             <circle class="text-primary" stroke-width="10" :stroke-dasharray="30 * 2 * Math.PI"
                                 :stroke-dashoffset="30 * 2 * Math.PI - percent / 100 * 30 * 2 * Math.PI" stroke-linecap=""
                                 stroke="currentColor" fill="transparent" r="30" cx="35" cy="35" />
                         </svg>
                     </div>
                 </div>
             </div>

             <div
                 class="rounded-sm border border-stroke bg-white p-4 shadow-default dark:border-strokedark dark:bg-boxdark md:p-6 xl:p-7.5">
                 <div class="flex items-end justify-between">
                     <div>
                         <h3 class="mb-4 text-title-lg font-bold text-black dark:text-white">
                             745
                         </h3>
                         <p class="font-medium">Contracts Signed</p>
                         <span class="mt-2 flex items-center gap-2">
                             <span class="flex items-center gap-1 rounded-md bg-red p-1 text-xs font-medium text-white">
                                 <svg width="14" height="15" viewBox="0 0 14 15" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                     <path
                                         d="M13.0157 5.24683C12.7532 5.24683 12.5344 5.46558 12.5344 5.72808V8.1562L9.40631 6.07808C8.94693 5.77183 8.37818 5.77183 7.91881 6.07808L5.0313 8.00308C4.92193 8.09058 4.7688 8.09058 4.63755 8.00308L1.24693 5.74995C1.02818 5.59683 0.721929 5.66245 0.568804 5.8812C0.415679 6.09995 0.481304 6.4062 0.700054 6.55933L4.09068 8.81245C4.55005 9.1187 5.1188 9.1187 5.57818 8.81245L8.46568 6.88745C8.57506 6.79995 8.72818 6.79995 8.85943 6.88745L11.6594 8.7687H9.4938C9.23131 8.7687 9.01256 8.98745 9.01256 9.24995C9.01256 9.51245 9.23131 9.7312 9.4938 9.7312H13.0157C13.2782 9.7312 13.4969 9.51245 13.4969 9.24995V5.72808C13.5188 5.46558 13.2782 5.24683 13.0157 5.24683Z"
                                         fill="white" />
                                 </svg>
                                 <span>+1.5%</span>
                             </span>

                             <span class="text-sm font-medium">Since last week</span>
                         </span>
                     </div>

                     <div x-data="{ percent: 30 }">
                         <svg class="h-17.5 w-17.5 -rotate-90 transform">
                             <circle class="text-stroke dark:text-strokedark" stroke-width="10" stroke="currentColor"
                                 fill="transparent" r="30" cx="35" cy="35" />
                             <circle class="text-primary" stroke-width="10" :stroke-dasharray="30 * 2 * Math.PI"
                                 :stroke-dashoffset="30 * 2 * Math.PI - percent / 100 * 30 * 2 * Math.PI" stroke-linecap=""
                                 stroke="currentColor" fill="transparent" r="30" cx="35" cy="35" />
                         </svg>
                     </div>
                 </div>
             </div>

             <div
                 class="rounded-sm border border-stroke bg-white p-4 shadow-default dark:border-strokedark dark:bg-boxdark md:p-6 xl:p-7.5">
                 <div class="flex items-end justify-between">
                     <div>
                         <h3 class="mb-4 text-title-lg font-bold text-black dark:text-white">
                             512
                         </h3>
                         <p class="font-medium">Invoice Sent</p>
                         <span class="mt-2 flex items-center gap-2">
                             <span class="flex items-center gap-1 rounded-md bg-meta-3 p-1 text-xs font-medium text-white">
                                 <svg width="14" height="15" viewBox="0 0 14 15" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                     <path
                                         d="M13.0155 5.24683H9.49366C9.23116 5.24683 9.01241 5.46558 9.01241 5.72808C9.01241 5.99058 9.23116 6.20933 9.49366 6.20933H11.6593L8.85928 8.09058C8.74991 8.17808 8.59678 8.17808 8.46553 8.09058L5.57803 6.18745C5.11866 5.8812 4.54991 5.8812 4.09053 6.18745L0.721783 8.44058C0.503033 8.5937 0.437408 8.89995 0.590533 9.1187C0.678033 9.24995 0.831157 9.33745 1.00616 9.33745C1.09366 9.33745 1.20303 9.31558 1.26866 9.24995L4.65928 6.99683C4.76866 6.90933 4.92178 6.90933 5.05303 6.99683L7.94053 8.92183C8.39991 9.22808 8.96866 9.22808 9.42803 8.92183L12.5124 6.8437V9.27183C12.5124 9.53433 12.7312 9.75308 12.9937 9.75308C13.2562 9.75308 13.4749 9.53433 13.4749 9.27183V5.72808C13.5187 5.46558 13.278 5.24683 13.0155 5.24683Z"
                                         fill="white" />
                                 </svg>
                                 <span>+0.5%</span>
                             </span>

                             <span class="text-sm font-medium">Since last week</span>
                         </span>
                     </div>

                     <div x-data="{ percent: 70 }">
                         <svg class="h-17.5 w-17.5 -rotate-90 transform">
                             <circle class="text-stroke dark:text-strokedark" stroke-width="10" stroke="currentColor"
                                 fill="transparent" r="30" cx="35" cy="35" />
                             <circle class="text-primary" stroke-width="10" :stroke-dasharray="30 * 2 * Math.PI"
                                 :stroke-dashoffset="30 * 2 * Math.PI - percent / 100 * 30 * 2 * Math.PI" stroke-linecap=""
                                 stroke="currentColor" fill="transparent" r="30" cx="35" cy="35" />
                         </svg>
                     </div>
                 </div>
             </div>
         </div>
         <!-- ===== Data Stats End ===== -->

         <div class="mt-7.5 grid grid-cols-12 gap-4 md:gap-6 2xl:gap-7.5">
             <!-- ===== Chart Seven Start ===== -->
             <div class="col-span-12 xl:col-span-7">
                 <div
                     class="col-span-12 rounded-sm border border-stroke bg-white px-5 pb-5 pt-7.5 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:col-span-8">
                     <div class="mb-6 flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
                         <div>
                             <h4 class="text-title-sm2 font-bold text-black dark:text-white">
                                 Payments Overview
                             </h4>
                         </div>
                         <div class="flex items-center">
                             <p class="font-medium uppercase text-black dark:text-white">Short by:</p>
                             <div class="relative z-20 inline-block">
                                 <select name="#" id="#"
                                     class="relative z-20 inline-flex appearance-none bg-transparent py-1 pl-3 pr-8 font-medium outline-none">
                                     <option value="">Monthly</option>
                                     <option value="">Weekly</option>
                                 </select>
                                 <span class="absolute right-1 top-1/2 z-10 -translate-y-1/2">
                                     <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                         <path
                                             d="M8.99995 12.8249C8.8312 12.8249 8.69058 12.7687 8.54995 12.6562L2.0812 6.2999C1.82808 6.04678 1.82808 5.65303 2.0812 5.3999C2.33433 5.14678 2.72808 5.14678 2.9812 5.3999L8.99995 11.278L15.0187 5.34365C15.2718 5.09053 15.6656 5.09053 15.9187 5.34365C16.1718 5.59678 16.1718 5.99053 15.9187 6.24365L9.44995 12.5999C9.30933 12.7405 9.1687 12.8249 8.99995 12.8249Z"
                                             fill="#64748B" />
                                     </svg>
                                 </span>
                             </div>
                         </div>
                     </div>
                     <div>
                         <div id="chartSeven" class="-ml-5"></div>
                     </div>

                     <div class="flex flex-col text-center xsm:flex-row">
                         <div class="border-stroke py-2 dark:border-strokedark xsm:w-1/2 xsm:border-r">
                             <p class="font-medium">Received Amount</p>
                             <h4 class="mt-1 text-title-sm font-bold text-black dark:text-white">
                                 $45,070.00
                             </h4>
                         </div>
                         <div class="py-2 xsm:w-1/2">
                             <p class="font-medium">Due Amount</p>
                             <h4 class="mt-1 text-title-sm font-bold text-black dark:text-white">
                                 $32,400.00
                             </h4>
                         </div>
                     </div>
                 </div>

             </div>
             <!-- ===== Chart Seven End ===== -->

             <!-- ===== Chart Eight Start ===== -->
             <div class="col-span-12 xl:col-span-5">
                 <div
                     class="rounded-sm border border-stroke bg-white px-5 pb-5 pt-7.5 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5">
                     <div class="mb-3 justify-between gap-4 sm:flex">
                         <div>
                             <h4 class="text-title-sm2 font-bold text-black dark:text-white">
                                 Used Devices
                             </h4>
                         </div>
                         <div class="mt-2 flex items-center sm:mt-0">
                             <p class="font-medium uppercase text-black dark:text-white">Short by:</p>
                             <div class="relative z-20 inline-block">
                                 <select name="#" id="#"
                                     class="relative z-20 inline-flex appearance-none bg-transparent py-1 pl-3 pr-8 font-medium outline-none">
                                     <option value="">Monthly</option>
                                     <option value="">Weekly</option>
                                 </select>
                                 <span class="absolute right-1 top-1/2 z-10 -translate-y-1/2">
                                     <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                         <path
                                             d="M8.99995 12.8249C8.8312 12.8249 8.69058 12.7687 8.54995 12.6562L2.0812 6.2999C1.82808 6.04678 1.82808 5.65303 2.0812 5.3999C2.33433 5.14678 2.72808 5.14678 2.9812 5.3999L8.99995 11.278L15.0187 5.34365C15.2718 5.09053 15.6656 5.09053 15.9187 5.34365C16.1718 5.59678 16.1718 5.99053 15.9187 6.24365L9.44995 12.5999C9.30933 12.7405 9.1687 12.8249 8.99995 12.8249Z"
                                             fill="#64748B" />
                                     </svg>
                                 </span>
                             </div>
                         </div>
                     </div>
                     <div class="mb-2">
                         <div id="chartEight" class="mx-auto flex justify-center"></div>
                     </div>

                     <div class="flex flex-col gap-4">
                         <div class="flex items-center justify-between">
                             <div class="flex items-center gap-2">
                                 <span class="block h-4 w-4 rounded-full border-4 border-primary"></span>
                                 <span class="font-medium text-black-2 dark:text-white">Mobile</span>
                             </div>

                             <span
                                 class="inline-block rounded-md bg-primary px-1.5 py-0.5 text-xs font-medium text-white">10%</span>
                         </div>

                         <div class="flex items-center justify-between">
                             <div class="flex items-center gap-2">
                                 <span class="block h-4 w-4 rounded-full border-4 border-secondary"></span>
                                 <span class="font-medium text-black-2 dark:text-white">Tablet</span>
                             </div>

                             <span
                                 class="inline-block rounded-md bg-secondary px-1.5 py-0.5 text-xs font-medium text-white">20%</span>
                         </div>

                         <div class="flex items-center justify-between">
                             <div class="flex items-center gap-2">
                                 <span class="block h-4 w-4 rounded-full border-4 border-meta-10"></span>
                                 <span class="font-medium text-black-2 dark:text-white">Desktop</span>
                             </div>

                             <span
                                 class="inline-block rounded-md bg-meta-10 px-1.5 py-0.5 text-xs font-medium text-white">70%</span>
                         </div>
                     </div>
                 </div>

             </div>
             <!-- ===== Chart Eight End ===== -->

             <!-- ===== Leads Report Start ===== -->
             <div class="col-span-12">
                 <div
                     class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                     <div class="p-4 md:p-6 xl:p-7.5">
                         <div class="flex items-start justify-between">
                             <div>
                                 <h2 class="text-title-sm2 font-bold text-black dark:text-white">
                                     Leads Report
                                 </h2>
                             </div>
                             <div x-data="{ openDropDown: false }" class="relative">
                                 <button @click="openDropDown = !openDropDown">
                                     <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                         <path
                                             d="M2.25 11.25C3.49264 11.25 4.5 10.2426 4.5 9C4.5 7.75736 3.49264 6.75 2.25 6.75C1.00736 6.75 0 7.75736 0 9C0 10.2426 1.00736 11.25 2.25 11.25Z"
                                             fill="#98A6AD" />
                                         <path
                                             d="M9 11.25C10.2426 11.25 11.25 10.2426 11.25 9C11.25 7.75736 10.2426 6.75 9 6.75C7.75736 6.75 6.75 7.75736 6.75 9C6.75 10.2426 7.75736 11.25 9 11.25Z"
                                             fill="#98A6AD" />
                                         <path
                                             d="M15.75 11.25C16.9926 11.25 18 10.2426 18 9C18 7.75736 16.9926 6.75 15.75 6.75C14.5074 6.75 13.5 7.75736 13.5 9C13.5 10.2426 14.5074 11.25 15.75 11.25Z"
                                             fill="#98A6AD" />
                                     </svg>
                                 </button>
                                 <div x-show="openDropDown" @click.outside="openDropDown = false"
                                     class="absolute right-0 top-full z-40 w-40 space-y-1 rounded-sm border border-stroke bg-white p-1.5 shadow-default dark:border-strokedark dark:bg-boxdark">
                                     <button
                                         class="flex w-full items-center gap-2 rounded-sm px-4 py-1.5 text-left text-sm hover:bg-gray dark:hover:bg-meta-4">
                                         <svg class="fill-current" width="16" height="16" viewBox="0 0 16 16"
                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <g clip-path="url(#clip0_62_9787)">
                                                 <path
                                                     d="M15.55 2.97499C15.55 2.77499 15.475 2.57499 15.325 2.42499C15.025 2.12499 14.725 1.82499 14.45 1.52499C14.175 1.24999 13.925 0.974987 13.65 0.724987C13.525 0.574987 13.375 0.474986 13.175 0.449986C12.95 0.424986 12.75 0.474986 12.575 0.624987L10.875 2.32499H2.02495C1.17495 2.32499 0.449951 3.02499 0.449951 3.89999V14C0.449951 14.85 1.14995 15.575 2.02495 15.575H12.15C13 15.575 13.725 14.875 13.725 14V5.12499L15.35 3.49999C15.475 3.34999 15.55 3.17499 15.55 2.97499ZM8.19995 8.99999C8.17495 9.02499 8.17495 9.02499 8.14995 9.02499L6.34995 9.62499L6.94995 7.82499C6.94995 7.79999 6.97495 7.79999 6.97495 7.77499L11.475 3.27499L12.725 4.49999L8.19995 8.99999ZM12.575 14C12.575 14.25 12.375 14.45 12.125 14.45H2.02495C1.77495 14.45 1.57495 14.25 1.57495 14V3.87499C1.57495 3.62499 1.77495 3.42499 2.02495 3.42499H9.72495L6.17495 6.99999C6.04995 7.12499 5.92495 7.29999 5.87495 7.49999L4.94995 10.3C4.87495 10.5 4.92495 10.675 5.02495 10.85C5.09995 10.95 5.24995 11.1 5.52495 11.1H5.62495L8.49995 10.15C8.67495 10.1 8.84995 9.97499 8.97495 9.84999L12.575 6.24999V14ZM13.5 3.72499L12.25 2.49999L13.025 1.72499C13.225 1.92499 14.05 2.74999 14.25 2.97499L13.5 3.72499Z"
                                                     fill="" />
                                             </g>
                                             <defs>
                                                 <clipPath id="clip0_62_9787">
                                                     <rect width="16" height="16" fill="white" />
                                                 </clipPath>
                                             </defs>
                                         </svg>
                                         Edit
                                     </button>
                                     <button
                                         class="flex w-full items-center gap-2 rounded-sm px-4 py-1.5 text-left text-sm hover:bg-gray dark:hover:bg-meta-4">
                                         <svg class="fill-current" width="16" height="16" viewBox="0 0 16 16"
                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                 d="M12.225 2.20005H10.3V1.77505C10.3 1.02505 9.70005 0.425049 8.95005 0.425049H7.02505C6.27505 0.425049 5.67505 1.02505 5.67505 1.77505V2.20005H3.75005C3.02505 2.20005 2.42505 2.80005 2.42505 3.52505V4.27505C2.42505 4.82505 2.75005 5.27505 3.22505 5.47505L3.62505 13.75C3.67505 14.775 4.52505 15.575 5.55005 15.575H10.4C11.425 15.575 12.275 14.775 12.325 13.75L12.75 5.45005C13.225 5.25005 13.55 4.77505 13.55 4.25005V3.50005C13.55 2.80005 12.95 2.20005 12.225 2.20005ZM6.82505 1.77505C6.82505 1.65005 6.92505 1.55005 7.05005 1.55005H8.97505C9.10005 1.55005 9.20005 1.65005 9.20005 1.77505V2.20005H6.85005V1.77505H6.82505ZM3.57505 3.52505C3.57505 3.42505 3.65005 3.32505 3.77505 3.32505H12.225C12.325 3.32505 12.425 3.40005 12.425 3.52505V4.27505C12.425 4.37505 12.35 4.47505 12.225 4.47505H3.77505C3.67505 4.47505 3.57505 4.40005 3.57505 4.27505V3.52505V3.52505ZM10.425 14.45H5.57505C5.15005 14.45 4.80005 14.125 4.77505 13.675L4.40005 5.57505H11.625L11.25 13.675C11.2 14.1 10.85 14.45 10.425 14.45Z"
                                                 fill="" />
                                             <path
                                                 d="M8.00005 8.1001C7.70005 8.1001 7.42505 8.3501 7.42505 8.6751V11.8501C7.42505 12.1501 7.67505 12.4251 8.00005 12.4251C8.30005 12.4251 8.57505 12.1751 8.57505 11.8501V8.6751C8.57505 8.3501 8.30005 8.1001 8.00005 8.1001Z"
                                                 fill="" />
                                             <path
                                                 d="M9.99994 8.60004C9.67494 8.57504 9.42494 8.80004 9.39994 9.12504L9.24994 11.325C9.22494 11.625 9.44994 11.9 9.77494 11.925C9.79994 11.925 9.79994 11.925 9.82494 11.925C10.1249 11.925 10.3749 11.7 10.3749 11.4L10.5249 9.20004C10.5249 8.87504 10.2999 8.62504 9.99994 8.60004Z"
                                                 fill="" />
                                             <path
                                                 d="M5.97497 8.60004C5.67497 8.62504 5.42497 8.90004 5.44997 9.20004L5.62497 11.4C5.64997 11.7 5.89997 11.925 6.17497 11.925C6.19997 11.925 6.19997 11.925 6.22497 11.925C6.52497 11.9 6.77497 11.625 6.74997 11.325L6.57497 9.12504C6.57497 8.80004 6.29997 8.57504 5.97497 8.60004Z"
                                                 fill="" />
                                         </svg>
                                         Delete
                                     </button>
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="border-b border-stroke px-4 pb-5 dark:border-strokedark md:px-6 xl:px-7.5">
                         <div class="flex items-center gap-3">
                             <div class="w-2/12 xl:w-3/12">
                                 <span class="font-medium">Name</span>
                             </div>
                             <div class="w-6/12 2xsm:w-5/12 md:w-3/12">
                                 <span class="font-medium">Email</span>
                             </div>
                             <div class="hidden w-4/12 md:block xl:w-3/12">
                                 <span class="font-medium">Project</span>
                             </div>
                             <div class="hidden w-1/12 xl:block">
                                 <span class="font-medium">Duration</span>
                             </div>
                             <div class="w-4/12 2xsm:w-3/12 md:w-2/12 xl:w-1/12">
                                 <span class="font-medium">Status</span>
                             </div>
                             <div class="hidden w-2/12 text-center 2xsm:block md:w-1/12">
                                 <span class="font-medium">Actions</span>
                             </div>
                         </div>
                     </div>

                     <div class="p-4 md:p-6 xl:p-7.5">
                         <div class="flex flex-col gap-7">
                             <div class="flex items-center gap-3">
                                 <div class="w-2/12 xl:w-3/12">
                                     <div class="flex items-center gap-4">
                                         <div class="2xsm:h-11 2xsm:w-full 2xsm:max-w-11 2xsm:rounded-full">
                                             <img src="src/images/user/user-17.png" alt="User" />
                                         </div>
                                         <span class="hidden font-medium xl:block">Charlie Donin</span>
                                     </div>
                                 </div>
                                 <div class="w-6/12 2xsm:w-5/12 md:w-3/12">
                                     <span class="font-medium"><a href="cdn-cgi/l/email-protection.html"
                                             class="__cf_email__"
                                             data-cfemail="1e697a7f68776d5e7f7172307d7173">[email&#160;protected]</a></span>
                                 </div>
                                 <div class="hidden w-4/12 md:block xl:w-3/12">
                                     <span class="font-medium">25 Dec 2024 - 28 Dec 2024</span>
                                 </div>
                                 <div class="hidden w-1/12 xl:block">
                                     <span class="font-medium">3 Days</span>
                                 </div>
                                 <div class="w-4/12 2xsm:w-3/12 md:w-2/12 xl:w-1/12">
                                     <span
                                         class="inline-block rounded bg-red/[0.08] px-2.5 py-0.5 text-sm font-medium text-red">Lost
                                         Lead</span>
                                 </div>
                                 <div class="hidden w-2/12 2xsm:block md:w-1/12">
                                     <button class="mx-auto block hover:text-meta-1">
                                         <svg class="mx-auto fill-current" width="22" height="22"
                                             viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                 d="M16.8094 3.02498H14.1625V2.4406C14.1625 1.40935 13.3375 0.584351 12.3062 0.584351H9.65935C8.6281 0.584351 7.8031 1.40935 7.8031 2.4406V3.02498H5.15623C4.15935 3.02498 3.33435 3.84998 3.33435 4.84685V5.8781C3.33435 6.63435 3.78123 7.2531 4.43435 7.5281L4.98435 18.9062C5.0531 20.3156 6.22185 21.4156 7.63123 21.4156H14.3C15.7093 21.4156 16.8781 20.3156 16.9469 18.9062L17.5312 7.49372C18.1844 7.21872 18.6312 6.5656 18.6312 5.84373V4.81248C18.6312 3.84998 17.8062 3.02498 16.8094 3.02498ZM9.38435 2.4406C9.38435 2.26873 9.52185 2.13123 9.69373 2.13123H12.3406C12.5125 2.13123 12.65 2.26873 12.65 2.4406V3.02498H9.41873V2.4406H9.38435ZM4.9156 4.84685C4.9156 4.70935 5.01873 4.57185 5.1906 4.57185H16.8094C16.9469 4.57185 17.0844 4.67498 17.0844 4.84685V5.8781C17.0844 6.0156 16.9812 6.1531 16.8094 6.1531H5.1906C5.0531 6.1531 4.9156 6.04998 4.9156 5.8781V4.84685V4.84685ZM14.3344 19.8687H7.6656C7.08123 19.8687 6.59998 19.4218 6.5656 18.8031L6.04998 7.6656H15.9844L15.4687 18.8031C15.4 19.3875 14.9187 19.8687 14.3344 19.8687Z"
                                                 fill="" />
                                             <path
                                                 d="M11 11.1375C10.5875 11.1375 10.2094 11.4812 10.2094 11.9281V16.2937C10.2094 16.7062 10.5531 17.0843 11 17.0843C11.4125 17.0843 11.7906 16.7406 11.7906 16.2937V11.9281C11.7906 11.4812 11.4125 11.1375 11 11.1375Z"
                                                 fill="" />
                                             <path
                                                 d="M13.7499 11.825C13.303 11.7906 12.9593 12.1 12.9249 12.5469L12.7187 15.5719C12.6843 15.9844 12.9937 16.3625 13.4405 16.3969C13.4749 16.3969 13.4749 16.3969 13.5093 16.3969C13.9218 16.3969 14.2655 16.0875 14.2655 15.675L14.4718 12.65C14.4718 12.2031 14.1624 11.8594 13.7499 11.825Z"
                                                 fill="" />
                                             <path
                                                 d="M8.21558 11.825C7.80308 11.8594 7.45933 12.2375 7.49371 12.65L7.73433 15.675C7.76871 16.0875 8.11246 16.3969 8.49058 16.3969C8.52496 16.3969 8.52496 16.3969 8.55933 16.3969C8.97183 16.3625 9.31558 15.9844 9.28121 15.5719L9.04058 12.5469C9.04058 12.1 8.66246 11.7906 8.21558 11.825Z"
                                                 fill="" />
                                         </svg>
                                     </button>
                                 </div>
                             </div>

                             <div class="flex items-center gap-3">
                                 <div class="w-2/12 xl:w-3/12">
                                     <div class="flex items-center gap-4">
                                         <div class="2xsm:h-11 2xsm:w-full 2xsm:max-w-11 2xsm:rounded-full">
                                             <img src="src/images/user/user-18.png" alt="User" />
                                         </div>
                                         <span class="hidden font-medium xl:block">Makenna Carder</span>
                                     </div>
                                 </div>
                                 <div class="w-6/12 2xsm:w-5/12 md:w-3/12">
                                     <span class="font-medium"><a href="cdn-cgi/l/email-protection.html"
                                             class="__cf_email__"
                                             data-cfemail="660a1209141403152607090a4805090b">[email&#160;protected]</a></span>
                                 </div>
                                 <div class="hidden w-4/12 md:block xl:w-3/12">
                                     <span class="font-medium">25 Dec 2024 - 28 Dec 2024</span>
                                 </div>
                                 <div class="hidden w-1/12 xl:block">
                                     <span class="font-medium">3 Days</span>
                                 </div>
                                 <div class="w-4/12 2xsm:w-3/12 md:w-2/12 xl:w-1/12">
                                     <span
                                         class="inline-block rounded bg-meta-3/[0.08] px-2.5 py-0.5 text-sm font-medium text-meta-3">Active</span>
                                 </div>
                                 <div class="hidden w-2/12 2xsm:block md:w-1/12">
                                     <button class="mx-auto block hover:text-meta-1">
                                         <svg class="mx-auto fill-current" width="22" height="22"
                                             viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                 d="M16.8094 3.02498H14.1625V2.4406C14.1625 1.40935 13.3375 0.584351 12.3062 0.584351H9.65935C8.6281 0.584351 7.8031 1.40935 7.8031 2.4406V3.02498H5.15623C4.15935 3.02498 3.33435 3.84998 3.33435 4.84685V5.8781C3.33435 6.63435 3.78123 7.2531 4.43435 7.5281L4.98435 18.9062C5.0531 20.3156 6.22185 21.4156 7.63123 21.4156H14.3C15.7093 21.4156 16.8781 20.3156 16.9469 18.9062L17.5312 7.49372C18.1844 7.21872 18.6312 6.5656 18.6312 5.84373V4.81248C18.6312 3.84998 17.8062 3.02498 16.8094 3.02498ZM9.38435 2.4406C9.38435 2.26873 9.52185 2.13123 9.69373 2.13123H12.3406C12.5125 2.13123 12.65 2.26873 12.65 2.4406V3.02498H9.41873V2.4406H9.38435ZM4.9156 4.84685C4.9156 4.70935 5.01873 4.57185 5.1906 4.57185H16.8094C16.9469 4.57185 17.0844 4.67498 17.0844 4.84685V5.8781C17.0844 6.0156 16.9812 6.1531 16.8094 6.1531H5.1906C5.0531 6.1531 4.9156 6.04998 4.9156 5.8781V4.84685V4.84685ZM14.3344 19.8687H7.6656C7.08123 19.8687 6.59998 19.4218 6.5656 18.8031L6.04998 7.6656H15.9844L15.4687 18.8031C15.4 19.3875 14.9187 19.8687 14.3344 19.8687Z"
                                                 fill="" />
                                             <path
                                                 d="M11 11.1375C10.5875 11.1375 10.2094 11.4812 10.2094 11.9281V16.2937C10.2094 16.7062 10.5531 17.0843 11 17.0843C11.4125 17.0843 11.7906 16.7406 11.7906 16.2937V11.9281C11.7906 11.4812 11.4125 11.1375 11 11.1375Z"
                                                 fill="" />
                                             <path
                                                 d="M13.7499 11.825C13.303 11.7906 12.9593 12.1 12.9249 12.5469L12.7187 15.5719C12.6843 15.9844 12.9937 16.3625 13.4405 16.3969C13.4749 16.3969 13.4749 16.3969 13.5093 16.3969C13.9218 16.3969 14.2655 16.0875 14.2655 15.675L14.4718 12.65C14.4718 12.2031 14.1624 11.8594 13.7499 11.825Z"
                                                 fill="" />
                                             <path
                                                 d="M8.21558 11.825C7.80308 11.8594 7.45933 12.2375 7.49371 12.65L7.73433 15.675C7.76871 16.0875 8.11246 16.3969 8.49058 16.3969C8.52496 16.3969 8.52496 16.3969 8.55933 16.3969C8.97183 16.3625 9.31558 15.9844 9.28121 15.5719L9.04058 12.5469C9.04058 12.1 8.66246 11.7906 8.21558 11.825Z"
                                                 fill="" />
                                         </svg>
                                     </button>
                                 </div>
                             </div>

                             <div class="flex items-center gap-3">
                                 <div class="w-2/12 xl:w-3/12">
                                     <div class="flex items-center gap-4">
                                         <div class="2xsm:h-11 2xsm:w-full 2xsm:max-w-11 2xsm:rounded-full">
                                             <img src="src/images/user/user-19.png" alt="User" />
                                         </div>
                                         <span class="hidden font-medium xl:block">Talan Dokidis</span>
                                     </div>
                                 </div>
                                 <div class="w-6/12 2xsm:w-5/12 md:w-3/12">
                                     <span class="font-medium"><a href="cdn-cgi/l/email-protection.html"
                                             class="__cf_email__"
                                             data-cfemail="7e0c0a1f0712110c3e1f1112501d1113">[email&#160;protected]</a></span>
                                 </div>
                                 <div class="hidden w-4/12 md:block xl:w-3/12">
                                     <span class="font-medium">25 Dec 2024 - 28 Dec 2024</span>
                                 </div>
                                 <div class="hidden w-1/12 xl:block">
                                     <span class="font-medium">3 Days</span>
                                 </div>
                                 <div class="w-4/12 2xsm:w-3/12 md:w-2/12 xl:w-1/12">
                                     <span
                                         class="inline-block rounded bg-meta-3/[0.08] px-2.5 py-0.5 text-sm font-medium text-meta-3">Active</span>
                                 </div>
                                 <div class="hidden w-2/12 2xsm:block md:w-1/12">
                                     <button class="mx-auto block hover:text-meta-1">
                                         <svg class="mx-auto fill-current" width="22" height="22"
                                             viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                 d="M16.8094 3.02498H14.1625V2.4406C14.1625 1.40935 13.3375 0.584351 12.3062 0.584351H9.65935C8.6281 0.584351 7.8031 1.40935 7.8031 2.4406V3.02498H5.15623C4.15935 3.02498 3.33435 3.84998 3.33435 4.84685V5.8781C3.33435 6.63435 3.78123 7.2531 4.43435 7.5281L4.98435 18.9062C5.0531 20.3156 6.22185 21.4156 7.63123 21.4156H14.3C15.7093 21.4156 16.8781 20.3156 16.9469 18.9062L17.5312 7.49372C18.1844 7.21872 18.6312 6.5656 18.6312 5.84373V4.81248C18.6312 3.84998 17.8062 3.02498 16.8094 3.02498ZM9.38435 2.4406C9.38435 2.26873 9.52185 2.13123 9.69373 2.13123H12.3406C12.5125 2.13123 12.65 2.26873 12.65 2.4406V3.02498H9.41873V2.4406H9.38435ZM4.9156 4.84685C4.9156 4.70935 5.01873 4.57185 5.1906 4.57185H16.8094C16.9469 4.57185 17.0844 4.67498 17.0844 4.84685V5.8781C17.0844 6.0156 16.9812 6.1531 16.8094 6.1531H5.1906C5.0531 6.1531 4.9156 6.04998 4.9156 5.8781V4.84685V4.84685ZM14.3344 19.8687H7.6656C7.08123 19.8687 6.59998 19.4218 6.5656 18.8031L6.04998 7.6656H15.9844L15.4687 18.8031C15.4 19.3875 14.9187 19.8687 14.3344 19.8687Z"
                                                 fill="" />
                                             <path
                                                 d="M11 11.1375C10.5875 11.1375 10.2094 11.4812 10.2094 11.9281V16.2937C10.2094 16.7062 10.5531 17.0843 11 17.0843C11.4125 17.0843 11.7906 16.7406 11.7906 16.2937V11.9281C11.7906 11.4812 11.4125 11.1375 11 11.1375Z"
                                                 fill="" />
                                             <path
                                                 d="M13.7499 11.825C13.303 11.7906 12.9593 12.1 12.9249 12.5469L12.7187 15.5719C12.6843 15.9844 12.9937 16.3625 13.4405 16.3969C13.4749 16.3969 13.4749 16.3969 13.5093 16.3969C13.9218 16.3969 14.2655 16.0875 14.2655 15.675L14.4718 12.65C14.4718 12.2031 14.1624 11.8594 13.7499 11.825Z"
                                                 fill="" />
                                             <path
                                                 d="M8.21558 11.825C7.80308 11.8594 7.45933 12.2375 7.49371 12.65L7.73433 15.675C7.76871 16.0875 8.11246 16.3969 8.49058 16.3969C8.52496 16.3969 8.52496 16.3969 8.55933 16.3969C8.97183 16.3625 9.31558 15.9844 9.28121 15.5719L9.04058 12.5469C9.04058 12.1 8.66246 11.7906 8.21558 11.825Z"
                                                 fill="" />
                                         </svg>
                                     </button>
                                 </div>
                             </div>

                             <div class="flex items-center gap-3">
                                 <div class="w-2/12 xl:w-3/12">
                                     <div class="flex items-center gap-4">
                                         <div class="2xsm:h-11 2xsm:w-full 2xsm:max-w-11 2xsm:rounded-full">
                                             <img src="src/images/user/user-20.png" alt="User" />
                                         </div>
                                         <span class="hidden font-medium xl:block">Cheyenne Levin</span>
                                     </div>
                                 </div>
                                 <div class="w-6/12 2xsm:w-5/12 md:w-3/12">
                                     <span class="font-medium"><a href="cdn-cgi/l/email-protection.html"
                                             class="__cf_email__"
                                             data-cfemail="563334243921381637393a7835393b">[email&#160;protected]</a></span>
                                 </div>
                                 <div class="hidden w-4/12 md:block xl:w-3/12">
                                     <span class="font-medium">25 Dec 2024 - 28 Dec 2024</span>
                                 </div>
                                 <div class="hidden w-1/12 xl:block">
                                     <span class="font-medium">3 Days</span>
                                 </div>
                                 <div class="w-4/12 2xsm:w-3/12 md:w-2/12 xl:w-1/12">
                                     <span
                                         class="inline-block rounded bg-meta-3/[0.08] px-2.5 py-0.5 text-sm font-medium text-meta-3">Active</span>
                                 </div>
                                 <div class="hidden w-2/12 2xsm:block md:w-1/12">
                                     <button class="mx-auto block hover:text-meta-1">
                                         <svg class="mx-auto fill-current" width="22" height="22"
                                             viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                 d="M16.8094 3.02498H14.1625V2.4406C14.1625 1.40935 13.3375 0.584351 12.3062 0.584351H9.65935C8.6281 0.584351 7.8031 1.40935 7.8031 2.4406V3.02498H5.15623C4.15935 3.02498 3.33435 3.84998 3.33435 4.84685V5.8781C3.33435 6.63435 3.78123 7.2531 4.43435 7.5281L4.98435 18.9062C5.0531 20.3156 6.22185 21.4156 7.63123 21.4156H14.3C15.7093 21.4156 16.8781 20.3156 16.9469 18.9062L17.5312 7.49372C18.1844 7.21872 18.6312 6.5656 18.6312 5.84373V4.81248C18.6312 3.84998 17.8062 3.02498 16.8094 3.02498ZM9.38435 2.4406C9.38435 2.26873 9.52185 2.13123 9.69373 2.13123H12.3406C12.5125 2.13123 12.65 2.26873 12.65 2.4406V3.02498H9.41873V2.4406H9.38435ZM4.9156 4.84685C4.9156 4.70935 5.01873 4.57185 5.1906 4.57185H16.8094C16.9469 4.57185 17.0844 4.67498 17.0844 4.84685V5.8781C17.0844 6.0156 16.9812 6.1531 16.8094 6.1531H5.1906C5.0531 6.1531 4.9156 6.04998 4.9156 5.8781V4.84685V4.84685ZM14.3344 19.8687H7.6656C7.08123 19.8687 6.59998 19.4218 6.5656 18.8031L6.04998 7.6656H15.9844L15.4687 18.8031C15.4 19.3875 14.9187 19.8687 14.3344 19.8687Z"
                                                 fill="" />
                                             <path
                                                 d="M11 11.1375C10.5875 11.1375 10.2094 11.4812 10.2094 11.9281V16.2937C10.2094 16.7062 10.5531 17.0843 11 17.0843C11.4125 17.0843 11.7906 16.7406 11.7906 16.2937V11.9281C11.7906 11.4812 11.4125 11.1375 11 11.1375Z"
                                                 fill="" />
                                             <path
                                                 d="M13.7499 11.825C13.303 11.7906 12.9593 12.1 12.9249 12.5469L12.7187 15.5719C12.6843 15.9844 12.9937 16.3625 13.4405 16.3969C13.4749 16.3969 13.4749 16.3969 13.5093 16.3969C13.9218 16.3969 14.2655 16.0875 14.2655 15.675L14.4718 12.65C14.4718 12.2031 14.1624 11.8594 13.7499 11.825Z"
                                                 fill="" />
                                             <path
                                                 d="M8.21558 11.825C7.80308 11.8594 7.45933 12.2375 7.49371 12.65L7.73433 15.675C7.76871 16.0875 8.11246 16.3969 8.49058 16.3969C8.52496 16.3969 8.52496 16.3969 8.55933 16.3969C8.97183 16.3625 9.31558 15.9844 9.28121 15.5719L9.04058 12.5469C9.04058 12.1 8.66246 11.7906 8.21558 11.825Z"
                                                 fill="" />
                                         </svg>
                                     </button>
                                 </div>
                             </div>

                             <div class="flex items-center gap-3">
                                 <div class="w-2/12 xl:w-3/12">
                                     <div class="flex items-center gap-4">
                                         <div class="2xsm:h-11 2xsm:w-full 2xsm:max-w-11 2xsm:rounded-full">
                                             <img src="src/images/user/user-21.png" alt="User" />
                                         </div>
                                         <span class="hidden font-medium xl:block">James Aminoff</span>
                                     </div>
                                 </div>
                                 <div class="w-6/12 2xsm:w-5/12 md:w-3/12">
                                     <span class="font-medium"><a href="cdn-cgi/l/email-protection.html"
                                             class="__cf_email__"
                                             data-cfemail="d7a4bbb2b297b6b8bbf9b4b8ba">[email&#160;protected]</a></span>
                                 </div>
                                 <div class="hidden w-4/12 md:block xl:w-3/12">
                                     <span class="font-medium">25 Dec 2024 - 28 Dec 2024</span>
                                 </div>
                                 <div class="hidden w-1/12 xl:block">
                                     <span class="font-medium">3 Days</span>
                                 </div>
                                 <div class="w-4/12 2xsm:w-3/12 md:w-2/12 xl:w-1/12">
                                     <span
                                         class="inline-block rounded bg-red/[0.08] px-2.5 py-0.5 text-sm font-medium text-red">Closed</span>
                                 </div>
                                 <div class="hidden w-2/12 2xsm:block md:w-1/12">
                                     <button class="mx-auto block hover:text-meta-1">
                                         <svg class="mx-auto fill-current" width="22" height="22"
                                             viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                 d="M16.8094 3.02498H14.1625V2.4406C14.1625 1.40935 13.3375 0.584351 12.3062 0.584351H9.65935C8.6281 0.584351 7.8031 1.40935 7.8031 2.4406V3.02498H5.15623C4.15935 3.02498 3.33435 3.84998 3.33435 4.84685V5.8781C3.33435 6.63435 3.78123 7.2531 4.43435 7.5281L4.98435 18.9062C5.0531 20.3156 6.22185 21.4156 7.63123 21.4156H14.3C15.7093 21.4156 16.8781 20.3156 16.9469 18.9062L17.5312 7.49372C18.1844 7.21872 18.6312 6.5656 18.6312 5.84373V4.81248C18.6312 3.84998 17.8062 3.02498 16.8094 3.02498ZM9.38435 2.4406C9.38435 2.26873 9.52185 2.13123 9.69373 2.13123H12.3406C12.5125 2.13123 12.65 2.26873 12.65 2.4406V3.02498H9.41873V2.4406H9.38435ZM4.9156 4.84685C4.9156 4.70935 5.01873 4.57185 5.1906 4.57185H16.8094C16.9469 4.57185 17.0844 4.67498 17.0844 4.84685V5.8781C17.0844 6.0156 16.9812 6.1531 16.8094 6.1531H5.1906C5.0531 6.1531 4.9156 6.04998 4.9156 5.8781V4.84685V4.84685ZM14.3344 19.8687H7.6656C7.08123 19.8687 6.59998 19.4218 6.5656 18.8031L6.04998 7.6656H15.9844L15.4687 18.8031C15.4 19.3875 14.9187 19.8687 14.3344 19.8687Z"
                                                 fill="" />
                                             <path
                                                 d="M11 11.1375C10.5875 11.1375 10.2094 11.4812 10.2094 11.9281V16.2937C10.2094 16.7062 10.5531 17.0843 11 17.0843C11.4125 17.0843 11.7906 16.7406 11.7906 16.2937V11.9281C11.7906 11.4812 11.4125 11.1375 11 11.1375Z"
                                                 fill="" />
                                             <path
                                                 d="M13.7499 11.825C13.303 11.7906 12.9593 12.1 12.9249 12.5469L12.7187 15.5719C12.6843 15.9844 12.9937 16.3625 13.4405 16.3969C13.4749 16.3969 13.4749 16.3969 13.5093 16.3969C13.9218 16.3969 14.2655 16.0875 14.2655 15.675L14.4718 12.65C14.4718 12.2031 14.1624 11.8594 13.7499 11.825Z"
                                                 fill="" />
                                             <path
                                                 d="M8.21558 11.825C7.80308 11.8594 7.45933 12.2375 7.49371 12.65L7.73433 15.675C7.76871 16.0875 8.11246 16.3969 8.49058 16.3969C8.52496 16.3969 8.52496 16.3969 8.55933 16.3969C8.97183 16.3625 9.31558 15.9844 9.28121 15.5719L9.04058 12.5469C9.04058 12.1 8.66246 11.7906 8.21558 11.825Z"
                                                 fill="" />
                                         </svg>
                                     </button>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- ===== Leads Report End ===== -->

             <!-- ===== Chart Nine Start ===== -->
             <div class="col-span-12 xl:col-span-5">
                 <div
                     class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                     <div
                         class="flex flex-col gap-2 border-b border-stroke px-6 py-5 dark:border-strokedark sm:flex-row sm:justify-between">
                         <div>
                             <h2 class="text-title-md2 font-bold text-black dark:text-white">
                                 Campaigns
                             </h2>
                         </div>
                         <div class="flex items-center">
                             <p class="font-medium uppercase text-black dark:text-white">Short by:</p>
                             <div class="relative z-20 inline-block">
                                 <select name="#" id="#"
                                     class="relative z-20 inline-flex appearance-none bg-transparent py-1 pl-3 pr-8 font-medium outline-none">
                                     <option value="">Monthly</option>
                                     <option value="">Weekly</option>
                                 </select>
                                 <span class="absolute right-1 top-1/2 z-10 -translate-y-1/2">
                                     <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                         <path
                                             d="M8.99995 12.8249C8.8312 12.8249 8.69058 12.7687 8.54995 12.6562L2.0812 6.2999C1.82808 6.04678 1.82808 5.65303 2.0812 5.3999C2.33433 5.14678 2.72808 5.14678 2.9812 5.3999L8.99995 11.278L15.0187 5.34365C15.2718 5.09053 15.6656 5.09053 15.9187 5.34365C16.1718 5.59678 16.1718 5.99053 15.9187 6.24365L9.44995 12.5999C9.30933 12.7405 9.1687 12.8249 8.99995 12.8249Z"
                                             fill="#64748B" />
                                     </svg>
                                 </span>
                             </div>
                         </div>
                     </div>

                     <div class="px-6 pt-4">
                         <div id="chartNine" class="-ml-5"></div>
                     </div>
                 </div>

             </div>
             <!-- ===== Chart Nine End ===== -->

             <!-- ===== To Do List Start ===== -->
             <div class="col-span-12 xl:col-span-7">
                 <div
                     class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                     <div class="border-b border-stroke px-4 py-4 dark:border-strokedark md:px-6 md:py-6 xl:px-7.5">
                         <div class="flex items-start justify-between">
                             <div>
                                 <h2 class="text-title-sm2 font-bold text-black dark:text-white">
                                     To Do List
                                 </h2>
                             </div>
                             <div x-data="{ openDropDown: false }" class="relative">
                                 <button @click="openDropDown = !openDropDown">
                                     <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                         <path
                                             d="M2.25 11.25C3.49264 11.25 4.5 10.2426 4.5 9C4.5 7.75736 3.49264 6.75 2.25 6.75C1.00736 6.75 0 7.75736 0 9C0 10.2426 1.00736 11.25 2.25 11.25Z"
                                             fill="#98A6AD" />
                                         <path
                                             d="M9 11.25C10.2426 11.25 11.25 10.2426 11.25 9C11.25 7.75736 10.2426 6.75 9 6.75C7.75736 6.75 6.75 7.75736 6.75 9C6.75 10.2426 7.75736 11.25 9 11.25Z"
                                             fill="#98A6AD" />
                                         <path
                                             d="M15.75 11.25C16.9926 11.25 18 10.2426 18 9C18 7.75736 16.9926 6.75 15.75 6.75C14.5074 6.75 13.5 7.75736 13.5 9C13.5 10.2426 14.5074 11.25 15.75 11.25Z"
                                             fill="#98A6AD" />
                                     </svg>
                                 </button>
                                 <div x-show="openDropDown" @click.outside="openDropDown = false"
                                     class="absolute right-0 top-full z-40 w-40 space-y-1 rounded-sm border border-stroke bg-white p-1.5 shadow-default dark:border-strokedark dark:bg-boxdark">
                                     <button
                                         class="flex w-full items-center gap-2 rounded-sm px-4 py-1.5 text-left text-sm hover:bg-gray dark:hover:bg-meta-4">
                                         <svg class="fill-current" width="16" height="16" viewBox="0 0 16 16"
                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <g clip-path="url(#clip0_62_9787)">
                                                 <path
                                                     d="M15.55 2.97499C15.55 2.77499 15.475 2.57499 15.325 2.42499C15.025 2.12499 14.725 1.82499 14.45 1.52499C14.175 1.24999 13.925 0.974987 13.65 0.724987C13.525 0.574987 13.375 0.474986 13.175 0.449986C12.95 0.424986 12.75 0.474986 12.575 0.624987L10.875 2.32499H2.02495C1.17495 2.32499 0.449951 3.02499 0.449951 3.89999V14C0.449951 14.85 1.14995 15.575 2.02495 15.575H12.15C13 15.575 13.725 14.875 13.725 14V5.12499L15.35 3.49999C15.475 3.34999 15.55 3.17499 15.55 2.97499ZM8.19995 8.99999C8.17495 9.02499 8.17495 9.02499 8.14995 9.02499L6.34995 9.62499L6.94995 7.82499C6.94995 7.79999 6.97495 7.79999 6.97495 7.77499L11.475 3.27499L12.725 4.49999L8.19995 8.99999ZM12.575 14C12.575 14.25 12.375 14.45 12.125 14.45H2.02495C1.77495 14.45 1.57495 14.25 1.57495 14V3.87499C1.57495 3.62499 1.77495 3.42499 2.02495 3.42499H9.72495L6.17495 6.99999C6.04995 7.12499 5.92495 7.29999 5.87495 7.49999L4.94995 10.3C4.87495 10.5 4.92495 10.675 5.02495 10.85C5.09995 10.95 5.24995 11.1 5.52495 11.1H5.62495L8.49995 10.15C8.67495 10.1 8.84995 9.97499 8.97495 9.84999L12.575 6.24999V14ZM13.5 3.72499L12.25 2.49999L13.025 1.72499C13.225 1.92499 14.05 2.74999 14.25 2.97499L13.5 3.72499Z"
                                                     fill="" />
                                             </g>
                                             <defs>
                                                 <clipPath id="clip0_62_9787">
                                                     <rect width="16" height="16" fill="white" />
                                                 </clipPath>
                                             </defs>
                                         </svg>
                                         Edit
                                     </button>
                                     <button
                                         class="flex w-full items-center gap-2 rounded-sm px-4 py-1.5 text-left text-sm hover:bg-gray dark:hover:bg-meta-4">
                                         <svg class="fill-current" width="16" height="16" viewBox="0 0 16 16"
                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                 d="M12.225 2.20005H10.3V1.77505C10.3 1.02505 9.70005 0.425049 8.95005 0.425049H7.02505C6.27505 0.425049 5.67505 1.02505 5.67505 1.77505V2.20005H3.75005C3.02505 2.20005 2.42505 2.80005 2.42505 3.52505V4.27505C2.42505 4.82505 2.75005 5.27505 3.22505 5.47505L3.62505 13.75C3.67505 14.775 4.52505 15.575 5.55005 15.575H10.4C11.425 15.575 12.275 14.775 12.325 13.75L12.75 5.45005C13.225 5.25005 13.55 4.77505 13.55 4.25005V3.50005C13.55 2.80005 12.95 2.20005 12.225 2.20005ZM6.82505 1.77505C6.82505 1.65005 6.92505 1.55005 7.05005 1.55005H8.97505C9.10005 1.55005 9.20005 1.65005 9.20005 1.77505V2.20005H6.85005V1.77505H6.82505ZM3.57505 3.52505C3.57505 3.42505 3.65005 3.32505 3.77505 3.32505H12.225C12.325 3.32505 12.425 3.40005 12.425 3.52505V4.27505C12.425 4.37505 12.35 4.47505 12.225 4.47505H3.77505C3.67505 4.47505 3.57505 4.40005 3.57505 4.27505V3.52505V3.52505ZM10.425 14.45H5.57505C5.15005 14.45 4.80005 14.125 4.77505 13.675L4.40005 5.57505H11.625L11.25 13.675C11.2 14.1 10.85 14.45 10.425 14.45Z"
                                                 fill="" />
                                             <path
                                                 d="M8.00005 8.1001C7.70005 8.1001 7.42505 8.3501 7.42505 8.6751V11.8501C7.42505 12.1501 7.67505 12.4251 8.00005 12.4251C8.30005 12.4251 8.57505 12.1751 8.57505 11.8501V8.6751C8.57505 8.3501 8.30005 8.1001 8.00005 8.1001Z"
                                                 fill="" />
                                             <path
                                                 d="M9.99994 8.60004C9.67494 8.57504 9.42494 8.80004 9.39994 9.12504L9.24994 11.325C9.22494 11.625 9.44994 11.9 9.77494 11.925C9.79994 11.925 9.79994 11.925 9.82494 11.925C10.1249 11.925 10.3749 11.7 10.3749 11.4L10.5249 9.20004C10.5249 8.87504 10.2999 8.62504 9.99994 8.60004Z"
                                                 fill="" />
                                             <path
                                                 d="M5.97497 8.60004C5.67497 8.62504 5.42497 8.90004 5.44997 9.20004L5.62497 11.4C5.64997 11.7 5.89997 11.925 6.17497 11.925C6.19997 11.925 6.19997 11.925 6.22497 11.925C6.52497 11.9 6.77497 11.625 6.74997 11.325L6.57497 9.12504C6.57497 8.80004 6.29997 8.57504 5.97497 8.60004Z"
                                                 fill="" />
                                         </svg>
                                         Delete
                                     </button>
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="px-4 py-4 md:px-6 md:py-6 xl:px-7.5">
                         <div class="flex flex-col gap-6">
                             <!-- To Do Item -->
                             <div class="flex items-center justify-between">
                                 <div class="flex flex-grow items-center gap-4.5">
                                     <div
                                         class="hidden h-15 w-full max-w-15 items-center justify-center rounded-full border border-stroke bg-gray dark:border-strokedark dark:bg-meta-4 xsm:flex">
                                         <svg width="26" height="20" viewBox="0 0 26 20" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <g clip-path="url(#clip0_605_15057)">
                                                 <path
                                                     d="M13.0842 5.33077V11.4067C13.0842 14.2371 11.3726 15.9467 8.778 15.9467C6.18312 15.9467 4.3615 14.2371 4.3615 11.4067V0H0V11.4067C0 16.5914 3.42261 19.8145 8.778 19.8145C14.1055 19.8145 17.4457 16.5914 17.4457 11.4067V0H17.3691C15.069 0.7498 13.3531 2.81913 13.0842 5.33077Z"
                                                     fill="url(#paint0_linear_605_15057)" />
                                                 <path
                                                     d="M21.1794 0H21.1045V19.6186H25.4661V5.33473C25.4249 3.15456 23.4808 0.750281 21.1794 0Z"
                                                     fill="url(#paint1_linear_605_15057)" />
                                                 <path
                                                     d="M13.0842 5.33077V11.4067C13.0842 11.4103 13.0839 11.414 13.0839 11.418C13.085 11.4784 13.0882 11.5383 13.0882 11.5992C13.0882 15.6912 10.0528 19.0615 6.14392 19.5207C6.95742 19.7131 7.83731 19.8145 8.778 19.8145C14.1055 19.8145 17.4457 16.5914 17.4457 11.4067V0H17.3691C15.069 0.7498 13.3531 2.81913 13.0842 5.33077Z"
                                                     fill="url(#paint2_linear_605_15057)" />
                                             </g>
                                             <defs>
                                                 <linearGradient id="paint0_linear_605_15057" x1="14.9261"
                                                     y1="17.8993" x2="3.30015" y2="-1.93446"
                                                     gradientUnits="userSpaceOnUse">
                                                     <stop stop-color="#2535C5" />
                                                     <stop offset="0.169697" stop-color="#36409B" />
                                                     <stop offset="0.575758" stop-color="#475BC6" />
                                                     <stop offset="1" stop-color="#7075E4" />
                                                 </linearGradient>
                                                 <linearGradient id="paint1_linear_605_15057" x1="23.2853"
                                                     y1="0" x2="23.2853" y2="19.6187"
                                                     gradientUnits="userSpaceOnUse">
                                                     <stop stop-color="#375AD8" />
                                                     <stop offset="0.472727" stop-color="#3C56DD" />
                                                     <stop offset="1" stop-color="#2A1A8F" />
                                                 </linearGradient>
                                                 <linearGradient id="paint2_linear_605_15057" x1="11.7948"
                                                     y1="0" x2="11.7948" y2="19.8146"
                                                     gradientUnits="userSpaceOnUse">
                                                     <stop stop-color="#233593" />
                                                     <stop offset="0.472727" stop-color="#4957D7" />
                                                     <stop offset="0.890909" stop-color="#5465FF" />
                                                     <stop offset="1" stop-color="#6A67FF" />
                                                 </linearGradient>
                                                 <clipPath id="clip0_605_15057">
                                                     <rect width="25.7692" height="20" fill="white" />
                                                 </clipPath>
                                             </defs>
                                         </svg>
                                     </div>

                                     <div>
                                         <h4 class="mb-2 font-medium text-black dark:text-white">
                                             Uideck Yearly Meetings
                                         </h4>

                                         <div class="flex flex-col gap-2 sm:flex-row sm:items-center sm:gap-5">
                                             <span class="flex items-center gap-1.5">
                                                 <svg class="fill-current" width="16" height="16"
                                                     viewBox="0 0 16 16" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                     <path
                                                         d="M8.57495 2.99999V1.57499H9.92495C10.225 1.57499 10.5 1.32499 10.5 0.999988C10.5 0.674988 10.25 0.424988 9.92495 0.424988H6.09995C5.79995 0.424988 5.52495 0.674988 5.52495 0.999988C5.52495 1.32499 5.77495 1.57499 6.09995 1.57499H7.44995V2.99999C4.22495 3.29999 1.69995 5.99999 1.69995 9.27499C1.69995 12.75 4.52495 15.575 7.99995 15.575C11.475 15.575 14.3 12.75 14.3 9.27499C14.3 5.99999 11.775 3.29999 8.57495 2.99999ZM7.99995 14.45C5.14995 14.45 2.82495 12.125 2.82495 9.27499C2.82495 6.42499 5.14995 4.09999 7.99995 4.09999C10.85 4.09999 13.175 6.42499 13.175 9.27499C13.175 12.125 10.85 14.45 7.99995 14.45Z"
                                                         fill="" />
                                                     <path
                                                         d="M11.1749 8.69996H8.5749V6.09996C8.5749 5.79996 8.3249 5.52496 7.9999 5.52496C7.6999 5.52496 7.4249 5.77496 7.4249 6.09996V8.72496H6.7249C6.4249 8.72496 6.1499 8.97496 6.1499 9.29996C6.1499 9.62496 6.3999 9.87496 6.7249 9.87496H7.4249V10.575C7.4249 10.875 7.6749 11.15 7.9999 11.15C8.2999 11.15 8.5749 10.9 8.5749 10.575V9.87496H11.1999C11.4999 9.87496 11.7749 9.62496 11.7749 9.29996C11.7749 8.97496 11.4999 8.69996 11.1749 8.69996Z"
                                                         fill="" />
                                                 </svg>

                                                 <span class="text-xs font-medium">10:20 AM - 3:00 PM</span>
                                             </span>

                                             <span class="flex items-center gap-1.5">
                                                 <svg class="fill-current" width="16" height="16"
                                                     viewBox="0 0 16 16" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                     <path
                                                         d="M14 2.65002H12.7V2.10002C12.7 1.80002 12.45 1.52502 12.125 1.52502C11.8 1.52502 11.55 1.77502 11.55 2.10002V2.65002H4.42505V2.10002C4.42505 1.80002 4.17505 1.52502 3.85005 1.52502C3.52505 1.52502 3.27505 1.77502 3.27505 2.10002V2.65002H2.00005C1.15005 2.65002 0.425049 3.35002 0.425049 4.22502V12.925C0.425049 13.775 1.12505 14.5 2.00005 14.5H14C14.85 14.5 15.575 13.8 15.575 12.925V4.20002C15.575 3.35002 14.85 2.65002 14 2.65002ZM1.57505 7.30002H3.70005V9.77503H1.57505V7.30002ZM4.82505 7.30002H7.45005V9.77503H4.82505V7.30002ZM7.45005 10.9V13.35H4.82505V10.9H7.45005ZM8.57505 10.9H11.2V13.35H8.57505V10.9ZM8.57505 9.77503V7.30002H11.2V9.77503H8.57505ZM12.3 7.30002H14.425V9.77503H12.3V7.30002ZM2.00005 3.77502H3.30005V4.30002C3.30005 4.60002 3.55005 4.87502 3.87505 4.87502C4.20005 4.87502 4.45005 4.62502 4.45005 4.30002V3.77502H11.6V4.30002C11.6 4.60002 11.85 4.87502 12.175 4.87502C12.5 4.87502 12.75 4.62502 12.75 4.30002V3.77502H14C14.25 3.77502 14.45 3.97502 14.45 4.22502V6.17502H1.57505V4.22502C1.57505 3.97502 1.75005 3.77502 2.00005 3.77502ZM1.57505 12.9V10.875H3.70005V13.325H2.00005C1.75005 13.35 1.57505 13.15 1.57505 12.9ZM14 13.35H12.3V10.9H14.425V12.925C14.45 13.15 14.25 13.35 14 13.35Z"
                                                         fill="" />
                                                 </svg>

                                                 <span class="text-xs font-medium">14 February,2025</span>
                                             </span>
                                         </div>
                                     </div>
                                 </div>

                                 <span
                                     class="rounded bg-meta-3/[0.08] px-2.5 py-1.5 text-sm font-medium text-meta-3">Completed</span>
                             </div>

                             <!-- To Do Item -->
                             <div class="flex items-center justify-between">
                                 <div class="flex flex-grow items-center gap-4.5">
                                     <div
                                         class="hidden h-15 w-full max-w-15 items-center justify-center rounded-full border border-stroke bg-gray dark:border-strokedark dark:bg-meta-4 xsm:flex">
                                         <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <g clip-path="url(#clip0_605_15127)">
                                                 <path
                                                     d="M16 1.0625C24.25 1.0625 30.925 7.7375 30.925 15.975C30.925 24.2125 24.25 30.9 16 30.9C7.74995 30.9 1.07495 24.225 1.07495 15.9875C1.07495 7.75 7.74995 1.0625 16 1.0625Z"
                                                     fill="#E74D89" />
                                                 <path
                                                     d="M16 31.9625C7.175 31.9625 0 24.8 0 15.9875C0 7.1625 7.175 0 16 0C24.825 0 32 7.1625 32 15.975C32 24.7875 24.825 31.9625 16 31.9625ZM29.4875 18.1625C29.025 18.0125 25.2625 16.9 20.975 17.575C22.7625 22.475 23.4875 26.475 23.625 27.3C26.7 25.2375 28.8875 21.9625 29.4875 18.1625ZM21.3375 28.5625C21.1375 27.3625 20.3375 23.1875 18.425 18.2125C18.4 18.225 18.3625 18.2375 18.3375 18.2375C10.625 20.925 7.8625 26.2625 7.6125 26.7625C9.925 28.5625 12.8375 29.6375 16 29.6375C17.8875 29.65 19.7 29.2625 21.3375 28.5625ZM5.85 25.125C6.1625 24.6 9.9125 18.4 16.9625 16.1125C17.1375 16.05 17.325 16 17.5 15.95C17.1625 15.175 16.7875 14.4 16.3875 13.6375C9.5625 15.675 2.9375 15.5875 2.3375 15.575C2.3375 15.7125 2.325 15.85 2.325 15.9875C2.3375 19.5 3.6625 22.7 5.85 25.125ZM2.625 13.2C3.2375 13.2125 8.8625 13.2375 15.2625 11.5375C13 7.5125 10.55 4.1375 10.2 3.65C6.3625 5.45 3.5125 8.975 2.625 13.2ZM12.8 2.725C13.175 3.225 15.6625 6.6 17.9 10.7125C22.7625 8.8875 24.8125 6.1375 25.0625 5.7875C22.65 3.65 19.475 2.35 16 2.35C14.9 2.35 13.825 2.4875 12.8 2.725ZM26.575 7.3625C26.2875 7.75 24 10.6875 18.95 12.75C19.2625 13.4 19.575 14.0625 19.8625 14.725C19.9625 14.9625 20.0625 15.2 20.1625 15.425C24.7125 14.85 29.225 15.775 29.675 15.8625C29.6375 12.65 28.4875 9.6875 26.575 7.3625Z"
                                                     fill="#B2215A" />
                                             </g>
                                             <defs>
                                                 <clipPath id="clip0_605_15127">
                                                     <rect width="32" height="32" fill="white" />
                                                 </clipPath>
                                             </defs>
                                         </svg>
                                     </div>

                                     <div>
                                         <h4 class="mb-2 font-medium text-black dark:text-white">
                                             2025 Dribbble Meet Up
                                         </h4>

                                         <div class="flex flex-col gap-2 sm:flex-row sm:items-center sm:gap-5">
                                             <span class="flex items-center gap-1.5">
                                                 <svg class="fill-current" width="16" height="16"
                                                     viewBox="0 0 16 16" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                     <path
                                                         d="M8.57495 2.99999V1.57499H9.92495C10.225 1.57499 10.5 1.32499 10.5 0.999988C10.5 0.674988 10.25 0.424988 9.92495 0.424988H6.09995C5.79995 0.424988 5.52495 0.674988 5.52495 0.999988C5.52495 1.32499 5.77495 1.57499 6.09995 1.57499H7.44995V2.99999C4.22495 3.29999 1.69995 5.99999 1.69995 9.27499C1.69995 12.75 4.52495 15.575 7.99995 15.575C11.475 15.575 14.3 12.75 14.3 9.27499C14.3 5.99999 11.775 3.29999 8.57495 2.99999ZM7.99995 14.45C5.14995 14.45 2.82495 12.125 2.82495 9.27499C2.82495 6.42499 5.14995 4.09999 7.99995 4.09999C10.85 4.09999 13.175 6.42499 13.175 9.27499C13.175 12.125 10.85 14.45 7.99995 14.45Z"
                                                         fill="" />
                                                     <path
                                                         d="M11.1749 8.69996H8.5749V6.09996C8.5749 5.79996 8.3249 5.52496 7.9999 5.52496C7.6999 5.52496 7.4249 5.77496 7.4249 6.09996V8.72496H6.7249C6.4249 8.72496 6.1499 8.97496 6.1499 9.29996C6.1499 9.62496 6.3999 9.87496 6.7249 9.87496H7.4249V10.575C7.4249 10.875 7.6749 11.15 7.9999 11.15C8.2999 11.15 8.5749 10.9 8.5749 10.575V9.87496H11.1999C11.4999 9.87496 11.7749 9.62496 11.7749 9.29996C11.7749 8.97496 11.4999 8.69996 11.1749 8.69996Z"
                                                         fill="" />
                                                 </svg>

                                                 <span class="text-xs font-medium">09:30 AM - 12:00 AM</span>
                                             </span>

                                             <span class="flex items-center gap-1.5">
                                                 <svg class="fill-current" width="16" height="16"
                                                     viewBox="0 0 16 16" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                     <path
                                                         d="M14 2.65002H12.7V2.10002C12.7 1.80002 12.45 1.52502 12.125 1.52502C11.8 1.52502 11.55 1.77502 11.55 2.10002V2.65002H4.42505V2.10002C4.42505 1.80002 4.17505 1.52502 3.85005 1.52502C3.52505 1.52502 3.27505 1.77502 3.27505 2.10002V2.65002H2.00005C1.15005 2.65002 0.425049 3.35002 0.425049 4.22502V12.925C0.425049 13.775 1.12505 14.5 2.00005 14.5H14C14.85 14.5 15.575 13.8 15.575 12.925V4.20002C15.575 3.35002 14.85 2.65002 14 2.65002ZM1.57505 7.30002H3.70005V9.77503H1.57505V7.30002ZM4.82505 7.30002H7.45005V9.77503H4.82505V7.30002ZM7.45005 10.9V13.35H4.82505V10.9H7.45005ZM8.57505 10.9H11.2V13.35H8.57505V10.9ZM8.57505 9.77503V7.30002H11.2V9.77503H8.57505ZM12.3 7.30002H14.425V9.77503H12.3V7.30002ZM2.00005 3.77502H3.30005V4.30002C3.30005 4.60002 3.55005 4.87502 3.87505 4.87502C4.20005 4.87502 4.45005 4.62502 4.45005 4.30002V3.77502H11.6V4.30002C11.6 4.60002 11.85 4.87502 12.175 4.87502C12.5 4.87502 12.75 4.62502 12.75 4.30002V3.77502H14C14.25 3.77502 14.45 3.97502 14.45 4.22502V6.17502H1.57505V4.22502C1.57505 3.97502 1.75005 3.77502 2.00005 3.77502ZM1.57505 12.9V10.875H3.70005V13.325H2.00005C1.75005 13.35 1.57505 13.15 1.57505 12.9ZM14 13.35H12.3V10.9H14.425V12.925C14.45 13.15 14.25 13.35 14 13.35Z"
                                                         fill="" />
                                                 </svg>

                                                 <span class="text-xs font-medium">12 February,2025</span>
                                             </span>
                                         </div>
                                     </div>
                                 </div>

                                 <span
                                     class="rounded bg-primary/[0.08] px-2.5 py-1.5 text-sm font-medium text-primary">Upcoming</span>
                             </div>

                             <!-- To Do Item -->
                             <div class="flex items-center justify-between">
                                 <div class="flex flex-grow items-center gap-4.5">
                                     <div
                                         class="hidden h-15 w-full max-w-15 items-center justify-center rounded-full border border-stroke bg-gray dark:border-strokedark dark:bg-meta-4 xsm:flex">
                                         <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <g clip-path="url(#clip0_605_15132)">
                                                 <path
                                                     d="M21.9381 0.375H2.10058C1.16309 0.375 0.413086 1.125 0.413086 2.0625V21.9375C0.413086 22.8375 1.16309 23.625 2.10058 23.625H21.8631C22.8006 23.625 23.5506 22.875 23.5506 21.9375V2.025C23.6256 1.125 22.8756 0.375 21.9381 0.375ZM7.2756 20.1375H3.8631V9.075H7.2756V20.1375ZM5.5506 7.5375C4.4256 7.5375 3.56308 6.6375 3.56308 5.55C3.56308 4.4625 4.4631 3.5625 5.5506 3.5625C6.6381 3.5625 7.5381 4.4625 7.5381 5.55C7.5381 6.6375 6.7131 7.5375 5.5506 7.5375ZM20.2131 20.1375H16.8006V14.775C16.8006 13.5 16.7631 11.8125 15.0006 11.8125C13.2006 11.8125 12.9381 13.2375 12.9381 14.6625V20.1375H9.5256V9.075H12.8631V10.6125H12.9006C13.3881 9.7125 14.4756 8.8125 16.1631 8.8125C19.6506 8.8125 20.2881 11.0625 20.2881 14.1375V20.1375H20.2131Z"
                                                     fill="#0B65C2" />
                                             </g>
                                             <defs>
                                                 <clipPath id="clip0_605_15132">
                                                     <rect width="24" height="24" fill="white" />
                                                 </clipPath>
                                             </defs>
                                         </svg>
                                     </div>

                                     <div>
                                         <h4 class="mb-2 font-medium text-black dark:text-white">
                                             2025 Linkedin Meet Up
                                         </h4>

                                         <div class="flex flex-col gap-2 sm:flex-row sm:items-center sm:gap-5">
                                             <span class="flex items-center gap-1.5">
                                                 <svg class="fill-current" width="16" height="16"
                                                     viewBox="0 0 16 16" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                     <path
                                                         d="M8.57495 2.99999V1.57499H9.92495C10.225 1.57499 10.5 1.32499 10.5 0.999988C10.5 0.674988 10.25 0.424988 9.92495 0.424988H6.09995C5.79995 0.424988 5.52495 0.674988 5.52495 0.999988C5.52495 1.32499 5.77495 1.57499 6.09995 1.57499H7.44995V2.99999C4.22495 3.29999 1.69995 5.99999 1.69995 9.27499C1.69995 12.75 4.52495 15.575 7.99995 15.575C11.475 15.575 14.3 12.75 14.3 9.27499C14.3 5.99999 11.775 3.29999 8.57495 2.99999ZM7.99995 14.45C5.14995 14.45 2.82495 12.125 2.82495 9.27499C2.82495 6.42499 5.14995 4.09999 7.99995 4.09999C10.85 4.09999 13.175 6.42499 13.175 9.27499C13.175 12.125 10.85 14.45 7.99995 14.45Z"
                                                         fill="" />
                                                     <path
                                                         d="M11.1749 8.69996H8.5749V6.09996C8.5749 5.79996 8.3249 5.52496 7.9999 5.52496C7.6999 5.52496 7.4249 5.77496 7.4249 6.09996V8.72496H6.7249C6.4249 8.72496 6.1499 8.97496 6.1499 9.29996C6.1499 9.62496 6.3999 9.87496 6.7249 9.87496H7.4249V10.575C7.4249 10.875 7.6749 11.15 7.9999 11.15C8.2999 11.15 8.5749 10.9 8.5749 10.575V9.87496H11.1999C11.4999 9.87496 11.7749 9.62496 11.7749 9.29996C11.7749 8.97496 11.4999 8.69996 11.1749 8.69996Z"
                                                         fill="" />
                                                 </svg>

                                                 <span class="text-xs font-medium">10:30 AM - 11:00 PM</span>
                                             </span>

                                             <span class="flex items-center gap-1.5">
                                                 <svg class="fill-current" width="16" height="16"
                                                     viewBox="0 0 16 16" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                     <path
                                                         d="M14 2.65002H12.7V2.10002C12.7 1.80002 12.45 1.52502 12.125 1.52502C11.8 1.52502 11.55 1.77502 11.55 2.10002V2.65002H4.42505V2.10002C4.42505 1.80002 4.17505 1.52502 3.85005 1.52502C3.52505 1.52502 3.27505 1.77502 3.27505 2.10002V2.65002H2.00005C1.15005 2.65002 0.425049 3.35002 0.425049 4.22502V12.925C0.425049 13.775 1.12505 14.5 2.00005 14.5H14C14.85 14.5 15.575 13.8 15.575 12.925V4.20002C15.575 3.35002 14.85 2.65002 14 2.65002ZM1.57505 7.30002H3.70005V9.77503H1.57505V7.30002ZM4.82505 7.30002H7.45005V9.77503H4.82505V7.30002ZM7.45005 10.9V13.35H4.82505V10.9H7.45005ZM8.57505 10.9H11.2V13.35H8.57505V10.9ZM8.57505 9.77503V7.30002H11.2V9.77503H8.57505ZM12.3 7.30002H14.425V9.77503H12.3V7.30002ZM2.00005 3.77502H3.30005V4.30002C3.30005 4.60002 3.55005 4.87502 3.87505 4.87502C4.20005 4.87502 4.45005 4.62502 4.45005 4.30002V3.77502H11.6V4.30002C11.6 4.60002 11.85 4.87502 12.175 4.87502C12.5 4.87502 12.75 4.62502 12.75 4.30002V3.77502H14C14.25 3.77502 14.45 3.97502 14.45 4.22502V6.17502H1.57505V4.22502C1.57505 3.97502 1.75005 3.77502 2.00005 3.77502ZM1.57505 12.9V10.875H3.70005V13.325H2.00005C1.75005 13.35 1.57505 13.15 1.57505 12.9ZM14 13.35H12.3V10.9H14.425V12.925C14.45 13.15 14.25 13.35 14 13.35Z"
                                                         fill="" />
                                                 </svg>

                                                 <span class="text-xs font-medium">05 February,2025</span>
                                             </span>
                                         </div>
                                     </div>
                                 </div>

                                 <span
                                     class="rounded bg-red/[0.08] px-2.5 py-1.5 text-sm font-medium text-red">Canceled</span>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- ===== To Do List End ===== -->
         </div>
     </div>
 @endsection
