<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Converge Service Application Form</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Custom utility to ensure input text aligns well with bottom borders */
    input[type="text"], input[type="email"] {
      background-color: transparent;
    }
    input[type="checkbox"] {
      accent-color: #115e59; /* Tailwind teal-800 */
    }
  </style>
</head>
<body class="bg-gray-100 py-8 text-black">
  <div class="max-w-5xl mx-auto p-8 bg-white border border-gray-300 shadow-lg font-sans text-[11px] leading-tight">
    
    <div class="flex justify-between items-start mb-4">
      <div class="flex items-center gap-2">
        <div class="text-teal-800 font-bold text-3xl tracking-tighter flex items-center">
          <svg class="w-10 h-10 mr-1" viewBox="0 0 24 24" fill="currentColor">
            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
          </svg>
          CONVERGE
        </div>
      </div>
      <div class="text-right">
        <h1 class="text-xl font-extrabold uppercase text-gray-800 tracking-tight">Service Application Form</h1>
        <p class="text-lg font-bold">No. <span class="text-red-600">8391890</span></p>
      </div>
    </div>
    <div class="bg-teal-800 text-white text-center py-1 font-semibold mb-4 italic text-xs">
      Personal Information (for residential)
    </div>
    <div class="space-y-4 mb-6">
      <div class="flex flex-wrap items-center justify-between gap-4">
        <div class="flex items-center gap-4">
          <span class="font-bold text-gray-700">Application Type:</span>
          <label class="flex items-center gap-1"><input type="checkbox" class="rounded"> Residential</label>
          <label class="flex items-center gap-1"><input type="checkbox" class="rounded"> Commercial</label>
        </div>
        <div class="flex items-center gap-2 flex-grow max-w-xs">
          <span class="font-bold text-gray-700 whitespace-nowrap">Date:</span>
          <input type="text" class="w-full border-b border-gray-800 focus:outline-none px-1 h-4">
        </div>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="flex items-center gap-2">
          <span class="font-bold text-gray-700 whitespace-nowrap">First Name:</span>
          <input type="text" class="w-full border-b border-gray-800 focus:outline-none px-1 h-4">
        </div>
        <div class="flex items-center gap-2">
          <span class="font-bold text-gray-700 whitespace-nowrap">Middle Name:</span>
          <input type="text" class="w-full border-b border-gray-800 focus:outline-none px-1 h-4">
        </div>
        <div class="flex items-center gap-2">
          <span class="font-bold text-gray-700 whitespace-nowrap">Last Name:</span>
          <input type="text" class="w-full border-b border-gray-800 focus:outline-none px-1 h-4">
        </div>
      </div>
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-4 items-center">
        <div class="lg:col-span-4 flex items-center gap-2 flex-wrap">
          <span class="font-bold text-gray-700">Title:</span>
          <label class="flex items-center gap-1"><input type="checkbox" class="rounded"> Mr.</label>
          <label class="flex items-center gap-1"><input type="checkbox" class="rounded"> Ms.</label>
          <label class="flex items-center gap-1"><input type="checkbox" class="rounded"> Mrs.</label>
          <label class="flex items-center gap-1 text-[10px]"><input type="checkbox" class="rounded"> Prefer not to say</label>
        </div>
        <div class="lg:col-span-3 flex items-center gap-2">
          <span class="font-bold text-gray-700 whitespace-nowrap">Date of Birth (MM/DD/YY):</span>
          <input type="text" class="w-16 border-b border-gray-800 text-center focus:outline-none h-4" placeholder="__ / __ / __">
        </div>
        <div class="lg:col-span-5 flex items-center gap-2 flex-wrap">
          <span class="font-bold text-gray-700">Age:</span>
          <label class="flex items-center gap-1"><input type="checkbox" class="rounded"> 18-24yrs</label>
          <label class="flex items-center gap-1"><input type="checkbox" class="rounded"> 25-39yrs</label>
          <label class="flex items-center gap-1"><input type="checkbox" class="rounded"> 40-44 yrs</label>
          <label class="flex items-center gap-1"><input type="checkbox" class="rounded"> 65yrs and over</label>
        </div>
      </div>
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-4 items-center">
        <div class="lg:col-span-3 flex items-center gap-2">
          <span class="font-bold text-gray-700">Nationality:</span>
          <label class="flex items-center gap-1"><input type="checkbox" class="rounded"> Local</label>
          <label class="flex items-center gap-1"><input type="checkbox" class="rounded"> Foreign</label>
        </div>
        <div class="lg:col-span-4 flex items-center gap-2">
          <span class="font-bold text-gray-700 whitespace-nowrap">Mobile No./Tel. No.:</span>
          <input type="text" class="w-full border-b border-gray-800 focus:outline-none px-1 h-4">
        </div>
        <div class="lg:col-span-5 flex items-center gap-2">
          <span class="font-bold text-gray-700 whitespace-nowrap">E-mail Add:</span>
          <input type="email" class="w-full border-b border-gray-800 focus:outline-none px-1 h-4">
        </div>
      </div>
    </div>
    <div class="bg-teal-800 text-white text-center py-1 font-bold mb-2 uppercase tracking-wide text-xs">
      Electronic Bill Information
    </div>
    
    <p class="text-center italic mb-3 text-[10px] text-gray-700">
      The electronic Statement of Account and other notices via email and SMS shall apply the same legal effects, validity and enforceability.
    </p>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-3 mb-6">
      <div class="space-y-3">
        <div class="flex items-end gap-2">
          <span class="font-bold whitespace-nowrap">Primary E-mail Address: 1.</span>
          <input type="email" class="w-full border-b border-gray-800 focus:outline-none px-1 h-4">
        </div>
        <div class="flex items-end gap-2">
          <span class="font-bold whitespace-nowrap">Secondary E-mail Address: 2.</span>
          <input type="email" class="w-full border-b border-gray-800 focus:outline-none px-1 h-4">
        </div>
      </div>
      <div class="space-y-3">
        <div class="flex items-end gap-2">
          <span class="font-bold whitespace-nowrap">Primary Mobile No.:</span>
          <div class="flex items-end gap-1 w-full">
            <input type="text" class="w-12 border-b border-gray-800 text-center focus:outline-none h-4" placeholder="___">
            <span>-</span>
            <input type="text" class="w-12 border-b border-gray-800 text-center focus:outline-none h-4" placeholder="___">
            <span>-</span>
            <input type="text" class="w-full border-b border-gray-800 text-center focus:outline-none h-4" placeholder="____">
          </div>
        </div>
        <div class="flex items-end gap-2">
          <span class="font-bold whitespace-nowrap">Secondary Mobile No.:</span>
          <div class="flex items-end gap-1 w-full">
            <input type="text" class="w-12 border-b border-gray-800 text-center focus:outline-none h-4" placeholder="___">
            <span>-</span>
            <input type="text" class="w-12 border-b border-gray-800 text-center focus:outline-none h-4" placeholder="___">
            <span>-</span>
            <input type="text" class="w-full border-b border-gray-800 text-center focus:outline-none h-4" placeholder="____">
          </div>
        </div>
      </div>
    </div>
    <div class="flex justify-between text-[10px] text-gray-600 italic mb-6">
      <span>For any changes on the information mentioned above, kindly visit us at https://account-update.convergeict.com</span>
      <span>For ways of payment, kindly visit our website - www.convergeict.com</span>
    </div>
    <div class="bg-teal-800 text-white text-center py-1 font-bold mb-4 uppercase tracking-wide text-xs">
      Service Address
    </div>
    <div class="space-y-4 mb-8">
      <div class="flex flex-wrap items-center gap-6">
        <span class="font-bold">Home Ownership:</span>
        <label class="flex items-center gap-1"><input type="checkbox" class="rounded-sm border-gray-400"> Owned</label>
        <label class="flex items-center gap-1"><input type="checkbox" class="rounded-sm border-gray-400"> Living with Relatives</label>
        <label class="flex items-center gap-1"><input type="checkbox" class="rounded-sm border-gray-400"> Mortgaged</label>
        <label class="flex items-center gap-1"><input type="checkbox" class="rounded-sm border-gray-400"> Rented</label>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-12 gap-4">
        <div class="md:col-span-3 flex items-end gap-2">
          <span class="font-bold whitespace-nowrap">House/Room No. /Floor:</span>
          <input type="text" class="w-full border-b border-gray-800 focus:outline-none px-1 h-4">
        </div>
        <div class="md:col-span-5 flex items-end gap-2">
          <span class="font-bold whitespace-nowrap">Apartment/Compound/Building:</span>
          <input type="text" class="w-full border-b border-gray-800 focus:outline-none px-1 h-4">
        </div>
        <div class="md:col-span-4 flex items-end gap-2">
          <span class="font-bold whitespace-nowrap">Street:</span>
          <input type="text" class="w-full border-b border-gray-800 focus:outline-none px-1 h-4">
        </div>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="flex items-end gap-2">
          <span class="font-bold whitespace-nowrap">Subdivision:</span>
          <input type="text" class="w-full border-b border-gray-800 focus:outline-none px-1 h-4">
        </div>
        <div class="flex items-end gap-2">
          <span class="font-bold whitespace-nowrap">Barangay:</span>
          <input type="text" class="w-full border-b border-gray-800 focus:outline-none px-1 h-4">
        </div>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
        <div class="md:col-span-6 flex items-end gap-2">
          <span class="font-bold whitespace-nowrap">Municipality/City:</span>
          <input type="text" class="w-full border-b border-gray-800 focus:outline-none px-1 h-4">
        </div>
        <div class="md:col-span-4 flex items-end gap-2">
          <span class="font-bold whitespace-nowrap">Province:</span>
          <input type="text" class="w-full border-b border-gray-800 focus:outline-none px-1 h-4">
        </div>
        <div class="md:col-span-2 flex items-end gap-2">
          <span class="font-bold whitespace-nowrap">Zip code:</span>
          <input type="text" class="w-full border-b border-gray-800 focus:outline-none px-1 h-4">
        </div>
      </div>
    </div>
    <div class="bg-teal-800 text-white text-center py-1 font-bold mb-4 uppercase tracking-wider text-xs">
      Products and Services
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
      <div>
        <div class="bg-teal-800 text-white text-center py-1 font-bold mb-0.5">Essential Plans</div>
        <table class="w-full border-collapse border border-gray-400 text-center text-[10px]">
          <thead>
            <tr class="bg-teal-800 text-white">
              <th class="border border-gray-400 w-8 py-1"></th>
              <th class="border border-gray-400 font-bold uppercase py-1">Plan</th>
              <th class="border border-gray-400 font-bold uppercase py-1">Speed</th>
              <th class="border border-gray-400 font-bold uppercase py-1 leading-none text-[9px]">Monthly<br>Service Fee</th>
            </tr>
          </thead>
          <tbody>
            <tr><td class="border border-gray-400 py-0.5"><input type="checkbox"></td><td class="border border-gray-400 text-left px-2">Super FiberX PLAY</td><td class="border border-gray-400">Up to 200 Mbps</td><td class="border border-gray-400">Php 1,349</td></tr>
            <tr><td class="border border-gray-400 py-0.5"><input type="checkbox"></td><td class="border border-gray-400 text-left px-2">FiberX 1500</td><td class="border border-gray-400">Up to 300 Mbps</td><td class="border border-gray-400">Php 1,500</td></tr>
            <tr><td class="border border-gray-400 py-0.5"><input type="checkbox"></td><td class="border border-gray-400 text-left px-2">FiberX Netflix 1558 (Basic)</td><td class="border border-gray-400">Up to 200 Mbps</td><td class="border border-gray-400">Php 1,558</td></tr>
            <tr><td class="border border-gray-400 py-0.5"><input type="checkbox"></td><td class="border border-gray-400 text-left px-2">Super FiberX MAX</td><td class="border border-gray-400">Up to 400 Mbps</td><td class="border border-gray-400">Php 1,599</td></tr>
            <tr><td class="border border-gray-400 py-0.5"><input type="checkbox"></td><td class="border border-gray-400 text-left px-2">Time of Day 1699 (Day)</td><td class="border border-gray-400">Up to <span class="font-bold">600/400</span> Mbps</td><td class="border border-gray-400">Php 1,699</td></tr>
            <tr><td class="border border-gray-400 py-0.5"><input type="checkbox"></td><td class="border border-gray-400 text-left px-2">Time of Day 1699 (Night)</td><td class="border border-gray-400">Up to <span class="font-bold">400/600</span> Mbps</td><td class="border border-gray-400">Php 1,699</td></tr>
            <tr><td class="border border-gray-400 py-0.5"><input type="checkbox"></td><td class="border border-gray-400 text-left px-2">FiberX Netflix 1798 (Basic)</td><td class="border border-gray-400">Up to 400 Mbps</td><td class="border border-gray-400">Php 1,798</td></tr>
          </tbody>
        </table>
      </div>
      <div>
        <div class="bg-teal-800 text-white text-center py-1 font-bold mb-0.5">Enhanced Lifestyle Plans</div>
        <table class="w-full border-collapse border border-gray-400 text-center text-[10px]">
          <thead>
            <tr class="bg-teal-800 text-white">
              <th class="border border-gray-400 w-8 py-1"></th>
              <th class="border border-gray-400 font-bold uppercase py-1">Plan</th>
              <th class="border border-gray-400 font-bold uppercase py-1">Speed</th>
              <th class="border border-gray-400 font-bold uppercase py-1 leading-none text-[9px]">Monthly<br>Service Fee</th>
            </tr>
          </thead>
          <tbody>
            <tr><td class="border border-gray-400 py-0.5"><input type="checkbox"></td><td class="border border-gray-400 text-left px-2">FiberX Netflix 1998 (Standard)</td><td class="border border-gray-400">Up to 500 Mbps</td><td class="border border-gray-400">Php 1,998</td></tr>
            <tr><td class="border border-gray-400 py-0.5"><input type="checkbox"></td><td class="border border-gray-400 text-left px-2">GameChanger Pro-Entry 2500</td><td class="border border-gray-400">Up to 500 Mbps</td><td class="border border-gray-400">Php 2,500</td></tr>
            <tr><td class="border border-gray-400 py-0.5"><input type="checkbox"></td><td class="border border-gray-400 text-left px-2">FiberX Netflix 2298 (Premium)</td><td class="border border-gray-400">Up to 600 Mbps</td><td class="border border-gray-400">Php 2,298</td></tr>
            <tr><td class="border border-gray-400 py-0.5"><input type="checkbox"></td><td class="border border-gray-400 text-left px-2">Super FiberX ULTRA</td><td class="border border-gray-400">Up to 800 Mbps</td><td class="border border-gray-400">Php 2,599</td></tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
      <div>
        <div class="bg-teal-800 text-white text-center py-1 font-bold mb-0.5">Ultimate Plans</div>
        <table class="w-full border-collapse border border-gray-400 text-center text-[10px]">
          <thead>
            <tr class="bg-teal-800 text-white">
              <th class="border border-gray-400 w-8 py-1"></th>
              <th class="border border-gray-400 font-bold uppercase py-1">Plan</th>
              <th class="border border-gray-400 font-bold uppercase py-1">Speed</th>
              <th class="border border-gray-400 font-bold uppercase py-1 leading-none text-[9px]">Monthly<br>Service Fee</th>
            </tr>
          </thead>
          <tbody>
            <tr><td class="border border-gray-400 py-0.5"><input type="checkbox"></td><td class="border border-gray-400 text-left px-2">GameChanger Pro-Mid 3000</td><td class="border border-gray-400">Up to 700 Mbps</td><td class="border border-gray-400">Php 3,000</td></tr>
            <tr><td class="border border-gray-400 py-0.5"><input type="checkbox"></td><td class="border border-gray-400 text-left px-2">FiberX 3500</td><td class="border border-gray-400">Up to 1 Gbps</td><td class="border border-gray-400">Php 3,500</td></tr>
            <tr><td class="border border-gray-400 py-0.5"><input type="checkbox"></td><td class="border border-gray-400 text-left px-2">GameChanger Elite Bootcamp</td><td class="border border-gray-400">Up to 1 Gbps</td><td class="border border-gray-400">Php 5,000</td></tr>
          </tbody>
        </table>
      </div>
      <div>
        <div class="bg-teal-800 text-white text-center py-1 font-bold mb-1.5">Add-on Service</div>
        <div class="grid grid-cols-1 gap-2">
          <table class="w-full border-collapse border border-gray-400 text-center text-[10px]">
            <thead>
              <tr class="bg-teal-800 text-white">
                <th colspan="4" class="border border-gray-400 py-0.5 text-[10px]">Streaming Package Plans</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="border border-gray-400 bg-gray-100 font-bold w-1/4">NETFLIX</td>
                <td class="border border-gray-400 w-1/4 p-1"><label class="block"><input type="checkbox" class="mb-1"><br>Basic<br>(Php 298)</label></td>
                <td class="border border-gray-400 w-1/4 p-1"><label class="block"><input type="checkbox" class="mb-1"><br>Standard<br>(Php 498)</label></td>
                <td class="border border-gray-400 w-1/4 p-1"><label class="block"><input type="checkbox" class="mb-1"><br>Premium<br>(Php 798)</label></td>
              </tr>
            </tbody>
          </table>
          <table class="w-full border-collapse border border-gray-400 text-center text-[10px]">
            <thead>
              <tr class="bg-teal-800 text-white">
                <th colspan="3" class="border border-gray-400 py-0.5 text-[10px]">Sky Tv Package Plans</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="border border-gray-400 w-1/3 p-1"><label class="block"><input type="checkbox" class="mb-1"><br>Basic<br>(Php 99)</label></td>
                <td class="border border-gray-400 w-1/3 p-1"><label class="block"><input type="checkbox" class="mb-1"><br>Standard<br>(Php 299)</label></td>
                <td class="border border-gray-400 w-1/3 p-1"><label class="block"><input type="checkbox" class="mb-1"><br>Premium<br>(Php 499)</label></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-6">
      <div>
        <h3 class="font-bold mb-2 text-xs">Installation Fees and Other Charges</h3>
        <ul class="space-y-1.5 ml-1">
          <li class="flex items-start gap-2"><span class="mt-1 flex-shrink-0 w-1.5 h-1.5 bg-black rounded-full"></span><span><span class="font-bold">Installation Fee:</span> Php 2,500, with options for outright payment or staggered payments at Php 125 per month over 24 months.</span></li>
          <li class="flex items-start gap-2"><span class="mt-1 flex-shrink-0 w-1.5 h-1.5 bg-black rounded-full"></span><span>FiberX Plans starting at Php 3,500 is free of Installation Cost.</span></li>
          <li class="flex items-start gap-2"><span class="mt-1 flex-shrink-0 w-1.5 h-1.5 bg-black rounded-full"></span><span><span class="font-bold">Advance Payment:</span> one-month advance service fee may be required.</span></li>
          <li class="flex items-start gap-2"><span class="mt-1 flex-shrink-0 w-1.5 h-1.5 bg-black rounded-full"></span><span>FiberX GameChanger Plans Set-Up Fee: Starts at Php 1,000.</span></li>
        </ul>
      </div>
      <div>
        <h3 class="font-bold mb-2 text-xs">Devices and VAS</h3>
        <ul class="space-y-1.5 ml-1">
          <li class="flex items-start gap-2"><span class="mt-1 flex-shrink-0 w-1.5 h-1.5 bg-black rounded-full"></span><span>WiFi-6 is included as the standard modem to all FiberX, Super FiberX, Netflix and GameChanger Plans.</span></li>
          <li class="flex items-start gap-2"><span class="mt-1 flex-shrink-0 w-1.5 h-1.5 bg-black rounded-full"></span><span>Super FiberX Plans include Xperience Hub and SkyTV Standard access.</span></li>
          <li class="flex items-start gap-2"><span class="mt-1 flex-shrink-0 w-1.5 h-1.5 bg-black rounded-full"></span><span>FiberX Netflix Plans include Xperience Hub and SkyTV Basic access.</span></li>
          <li class="flex items-start gap-2"><span class="mt-1 flex-shrink-0 w-1.5 h-1.5 bg-black rounded-full"></span><span>GameChanger Plans include ASUS Gaming Routers RT-AX82U for Plan 2500 and 3000 & ROG GT-AX6000 for Elite Bootcamp 5000.</span></li>
          <li class="flex items-start gap-2"><span class="mt-1 flex-shrink-0 w-1.5 h-1.5 bg-black rounded-full"></span><span>All GameChanger Plans come with Network Prioritization.</span></li>
        </ul>
      </div>
    </div>
    <div class="mb-6">
      <h3 class="font-bold mb-2 text-xs">Installation Fee</h3>
      <div class="flex flex-wrap gap-8 mb-3">
        <label class="flex items-center gap-1 cursor-pointer"><input type="checkbox" class="w-3 h-3 rounded-sm border-gray-400"> <span><span class="font-bold">Outright</span> Php 2,500 (paid before installation)</span></label>
        <label class="flex items-center gap-1 cursor-pointer"><input type="checkbox" class="w-3 h-3 rounded-sm border-gray-400"> <span><span class="font-bold">Staggered</span> Php 3,000 (Php 125 x 24 months charged to your bill)</span></label>
        <label class="flex items-center gap-1 cursor-pointer"><input type="checkbox" class="w-3 h-3 rounded-sm border-gray-400"> <span class="font-bold">Waived</span> (Promotional Offer)</label>
      </div>
      <div class="flex items-end gap-2 w-full mb-1">
        <span class="whitespace-nowrap">Special Instructions:</span>
        <input type="text" class="w-full border-b border-gray-800 focus:outline-none h-4">
      </div>
      <p class="italic text-[9px] text-gray-700 font-semibold">* Admin Fee: An additional Php 500 fee applies to staggered payment options.</p>
    </div>
    <div class="border-t border-gray-300 pt-4 mb-8">
      <h3 class="font-bold mb-1 text-xs">Note:</h3>
      <ul class="space-y-1 ml-1 text-gray-800">
        <li class="flex items-start gap-2"><span class="mt-1.5 flex-shrink-0 w-1 h-1 bg-black rounded-full"></span><span>All rates are VAT Inclusive.</span></li>
        <li class="flex items-start gap-2"><span class="mt-1.5 flex-shrink-0 w-1 h-1 bg-black rounded-full"></span><span>24 months lock-in period.</span></li>
        <li class="flex items-start gap-2"><span class="mt-1.5 flex-shrink-0 w-1 h-1 bg-black rounded-full"></span><span>Minimum guaranteed connection speeds of 30% of the subscribed speed at 80% minimum service reliability.</span></li>
        <li class="flex items-start gap-2"><span class="mt-1.5 flex-shrink-0 w-1 h-1 bg-black rounded-full"></span><span>Wireless speeds may vary based on factors such as the number of connected devices, distance from the router, wall thickness, and other environmental conditions.</span></li>
      </ul>
    </div>
    <div class="bg-teal-800 text-white text-center py-1 font-bold mb-1 uppercase tracking-wide text-xs">
      Documents Attached
    </div>
    <div class="text-center font-bold text-teal-800 mb-3 uppercase tracking-tighter text-xs">
      Mandatory Requirements
    </div>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-2 mb-6">
      <label class="flex items-center gap-1"><input type="checkbox" class="w-3 h-3 rounded-sm border-gray-400"> Government-issued ID</label>
      <label class="flex items-center gap-1"><input type="checkbox" class="w-3 h-3 rounded-sm border-gray-400"> Proof of billing (Last 2 months)</label>
      <label class="flex items-center gap-1"><input type="checkbox" class="w-3 h-3 rounded-sm border-gray-400"> <span>Proof of income (Last 3 months)<br><span class="text-[9px] block">(Only 400Mbps and up)</span></span></label>
      <label class="flex items-center gap-1"><input type="checkbox" class="w-3 h-3 rounded-sm border-gray-400"> <span>Lease contract or Endorsement<br>from lessor (If rented)</span></label>
    </div>
    <div class="space-y-3 mb-6">
      <div class="flex flex-wrap items-end gap-x-3">
        <span class="font-bold">Where did you learn about our offer:</span>
        <label class="flex items-center gap-1"><input type="checkbox" class="w-3 h-3"> Billboard /</label>
        <label class="flex items-center gap-1"><input type="checkbox" class="w-3 h-3"> Leaflets /</label>
        <label class="flex items-center gap-1"><input type="checkbox" class="w-3 h-3"> Radio /</label>
        <label class="flex items-center gap-1"><input type="checkbox" class="w-3 h-3"> TV /</label>
        <label class="flex items-center gap-1"><input type="checkbox" class="w-3 h-3"> Internet /</label>
        <label class="flex items-center gap-1"><input type="checkbox" class="w-3 h-3"> Friend Referrals /</label>
        <div class="flex items-end gap-1 flex-grow">
          <span>Others</span>
          <input type="text" class="flex-grow border-b border-gray-800 focus:outline-none h-4">
        </div>
      </div>
      <div class="flex flex-wrap items-end gap-x-4">
        <span class="font-bold">Did you switch from a previous internet provider?</span>
        <label class="flex items-center gap-1"><input type="checkbox" class="w-3 h-3"> Yes</label>
        <label class="flex items-center gap-1"><input type="checkbox" class="w-3 h-3"> No</label>
        <div class="flex items-end gap-1 flex-grow">
          <span>If yes, what was your previous internet provider?</span>
          <input type="text" class="flex-grow border-b border-gray-800 focus:outline-none h-4">
        </div>
      </div>
    </div>
    <div class="border border-gray-800 p-4 mb-6">
      <div class="text-center italic text-gray-700 text-[10px] mb-4">This portion is to be filled-out by customer service representative.</div>
      <div class="grid grid-cols-2 gap-x-12 gap-y-4">
        <div class="flex items-end gap-2">
          <span class="whitespace-nowrap">Account No. For Internet:</span>
          <div class="flex items-end gap-1 w-full">
             <input type="text" class="w-full border-b border-gray-800 focus:outline-none h-4">
             <span>-</span>
             <input type="text" class="w-full border-b border-gray-800 focus:outline-none h-4">
          </div>
        </div>
        <div class="flex items-end gap-2">
          <span class="whitespace-nowrap">O.R. No.</span>
          <input type="text" class="w-full border-b border-gray-800 focus:outline-none h-4">
        </div>
        <div class="flex items-end gap-2">
          <span class="whitespace-nowrap">Special Instruction:</span>
          <input type="text" class="w-full border-b border-gray-800 focus:outline-none h-4">
        </div>
        <div class="flex items-end gap-2">
          <span class="whitespace-nowrap">Salesman code:</span>
          <input type="text" class="w-full border-b border-gray-800 focus:outline-none h-4">
        </div>
      </div>
    </div>
    <div class="bg-gray-200 p-4 text-[10px] text-gray-800 space-y-2 mb-6">
      <p class="text-center font-bold">Your privacy is important to us and we are committed to protecting your privacy. To view our Privacy Notice, you may refer to www.convergeict.com/privacy-notice/</p>
      <div class="space-y-1">
        <label class="flex items-start gap-2">
          <input type="checkbox" class="mt-0.5">
          <span>I agree to the collection, processing, storage, and disclosure of my data in line with the Privacy Notice and understand that the Privacy Notice is subject to changes to align with internal operations and regulatory requirements.</span>
        </label>
        <label class="flex items-start gap-2">
          <input type="checkbox" class="mt-0.5">
          <span>I allow Converge ICT Solutions, Inc. to contact me for marketing and promotional communications.</span>
        </label>
      </div>
      <p>For questions, complaints, comments and requests related to the privacy of your personal information, please email us at <span class="font-bold underline">privacy@convergeict.com</span>.</p>
    </div>
    <div class="bg-teal-800 text-white text-center py-1 font-bold mb-4 uppercase tracking-wide text-xs">
      Undertaking
    </div>
    <div class="flex border border-gray-800 h-28">
      <div class="w-2/3 p-3 text-[10px] border-r border-gray-800 text-justify leading-relaxed">
        By voluntarily affixing my signature in this Service Application Form ("SAF"), I hereby agree to avail of the product and/or service identified above ("Service") from Converge Information and Communications Technology Solutions, Inc. ("Converge"). I also hereby confirm and affirm that I have read and understood all of the provisions of the Terms and Conditions, which can be found at the reverse page of this SAF and I agree to be bound by and comply with the provisions thereof.
      </div>
      <div class="w-1/3 flex flex-col justify-end p-4">
        <div class="border-b border-gray-800 w-full mb-1"></div>
        <div class="text-[10px] text-center uppercase font-bold italic">Subscriber's Signature over Printed Name</div>
      </div>
    </div>
  </div>
</body>
</html>

