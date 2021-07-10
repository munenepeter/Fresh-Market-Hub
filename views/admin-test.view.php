<?php require 'partials/admin-nav.php'; ?>



<body class="antialiased bg-gray-200">

	<div x-data="{ sidemenu: false }" class="h-screen flex overflow-hidden" x-cloak @keydown.window.escape="sidemenu = false">

         


		<!-- Menu Above Medium Screen -->
		<div class="bg-white w-64 min-h-screen overflow-y-auto hidden md:block shadow relative z-30">

			<!-- Brand Logo / Name -->
			<div class="flex items-center px-6 py-3 h-16">
				<div class="text-2xl font-bold tracking-tight text-gray-800">Dashboard Admin.</div>
			</div>
			<!-- @end Brand Logo / Name -->

			<div class="px-4 py-2">
				<ul>
					<li>
						<a href="#"
							class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200">
							<svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
								viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
								stroke-linecap="round" stroke-linejoin="round">
								<rect x="0" y="0" width="24" height="24" stroke="none"></rect>
								<rect x="4" y="4" width="6" height="6" rx="1" />
								<rect x="14" y="4" width="6" height="6" rx="1" />
								<rect x="4" y="14" width="6" height="6" rx="1" />
								<rect x="14" y="14" width="6" height="6" rx="1" />
							</svg>
							Dashboard
						</a>
					</li>

					<li>
						<a href="#"
							class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200">
							<svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
								viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
								stroke-linecap="round" stroke-linejoin="round">
								<rect x="0" y="0" width="24" height="24" stroke="none"></rect>
								<line x1="4" y1="19" x2="20" y2="19" />
								<polyline points="4 15 8 9 12 11 16 6 20 10" />
							</svg>
							Analytics
						</a>
					</li>

					<li>
						<a href="#"
							class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200">
							<svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
								viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
								stroke-linecap="round" stroke-linejoin="round">
								<rect x="0" y="0" width="24" height="24" stroke="none"></rect>
								<polyline points="14 3 14 8 19 8" />
								<path d="M17 21H7a2 2 0 0 1 -2 -2V5a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
								<line x1="9" y1="9" x2="10" y2="9" />
								<line x1="9" y1="13" x2="15" y2="13" />
								<line x1="9" y1="17" x2="15" y2="17" />
							</svg>
							Invoices
						</a>
					</li>

					<li>
						<a href="#"
							class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-blue-600 hover:text-blue-600 hover:bg-gray-200 bg-gray-200">
							<svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
								viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
								stroke-linecap="round" stroke-linejoin="round">
								<rect x="0" y="0" width="24" height="24" stroke="none"></rect>
								<circle cx="12" cy="12" r="9" />
								<polyline points="12 7 12 12 9 15" />
							</svg>
							Tracking
						</a>
					</li>

					<li>
						<a href="#"
							class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200">
							<svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
								viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
								stroke-linecap="round" stroke-linejoin="round">
								<rect x="0" y="0" width="24" height="24" stroke="none"></rect>
								<path
									d="M16 6h3a 1 1 0 011 1v11a2 2 0 0 1 -4 0v-13a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v12a3 3 0 0 0 3 3h11" />
								<line x1="8" y1="8" x2="12" y2="8" />
								<line x1="8" y1="12" x2="12" y2="12" />
								<line x1="8" y1="16" x2="12" y2="16" />
							</svg>
							History
						</a>
					</li>

					<li>
						<a href="#"
							class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200">
							<svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
								viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
								stroke-linecap="round" stroke-linejoin="round">
								<rect x="0" y="0" width="24" height="24" stroke="none"></rect>
								<path
									d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
								<circle cx="12" cy="12" r="3" />
							</svg>
							Settings
						</a>
					</li>
				</ul> 
				 
			</div>
		</div>
		<!-- @end Menu Above Medium Screen -->

		<div class="flex-1 flex-col relative z-0 overflow-y-auto">
			<div class="px-4 md:px-8 py-2 h-16 flex justify-between items-center shadow-sm bg-white">
				<div class="flex items-center w-2/3">
					<input class="bg-gray-200 focus:outline-none focus:shadow-outline focus:bg-white border border-transparent focus:border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal hidden md:block placeholder-gray-700 mr-10" type="text" placeholder="Search...">

					<div class="p-2 rounded-full hover:bg-gray-200 cursor-pointer md:hidden" @click="sidemenu = !sidemenu">
						<svg xmlns="http://www.w3.org/2000/svg" class="text-gray-600"
							width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
							fill="none" stroke-linecap="round" stroke-linejoin="round">
							<rect x="0" y="0" width="24" height="24" stroke="none"></rect>
							<line x1="4" y1="6" x2="20" y2="6" />
							<line x1="4" y1="12" x2="20" y2="12" />
							<line x1="4" y1="18" x2="20" y2="18" />
						</svg>
					</div>
					<div class="text-xl font-bold tracking-tight text-gray-800 md:hidden ml-2">Admin.</div>
				</div>
				<div class="flex items-center">
					 
					<a href="#" class="text-gray-500 p-2 rounded-full hover:text-blue-600 hover:bg-gray-200 cursor-pointer mr-4">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
							<rect x="0" y="0" width="24" height="24" stroke="none"></rect>
							<path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
							<path d="M9 17v1a3 3 0 0 0 6 0v-1" />
						</svg>						  
					</a>
					 
					<div class="relative" x-data="{ open: false }" x-cloak>
						<div @click="open = !open"
							class="cursor-pointer font-bold w-10 h-10 bg-blue-200 text-blue-600 flex items-center justify-center rounded-full">
							DA
						</div>

						<div x-show.transition="open" @click.away="open = false"
							class="absolute top-0 mt-12 right-0 w-48 bg-white py-2 shadow-md border border-gray-100 rounded-lg z-40">
						 
							<a href="#" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-blue-600">Sign
								Out</a>
						</div>
					</div>
				</div>
			</div>
		 
			<div class="md:max-w-6xl md:mx-auto px-4 py-8">

				 

				<div class="flex items-center justify-between mb-4">
					<h2 class="text-xl font-bold text-gray-800">Quick Analytics</h2> 
				</div>

				<div class="bg-yellow-200 mb-10 p-6 rounded-lg shadow">
					<div class="flex">
                  <div class="w-1/3 text-center py-8 ">
                    <div class="border-r border-green-400 text-center items-center">
                    <div class="ml-20 flex text-grey-darker mb-2">
                        <span class="text-3xl align-top">Ksh</span>
                        <span class="text-5xl"><?= number_format(78989, 0, '.', ',') ?></span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-red-600 align-top h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 13l-5 5m0 0l-5-5m5 5V6" />
                        </svg>

                    </div>
                    <div class="text-sm uppercase text-grey tracking-wide">
                        April Sales
                    </div>
                    </div>
                </div>
						 <div class="w-1/3 text-center py-8 ">
                    <div class="border-r border-green-400 text-center items-center">
                    <div class="ml-20 flex text-grey-darker mb-2">
                        <span class="text-3xl align-top">Ksh</span>
                        <span class="text-5xl"><?= number_format(78989, 0, '.', ',') ?></span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-red-600 align-top h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 13l-5 5m0 0l-5-5m5 5V6" />
                        </svg>

                    </div>
                    <div class="text-sm uppercase text-grey tracking-wide">
                        April Sales
                    </div>
                    </div>
                </div>
                 <div class="w-1/3 text-center py-8 ">
                    <div class="border-r border-green-400 text-center items-center">
                    <div class="ml-20 flex text-grey-darker mb-2">
                        <span class="text-3xl align-top">Ksh</span>
                        <span class="text-5xl"><?= number_format(78989, 0, '.', ',') ?></span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-red-600 align-top h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 13l-5 5m0 0l-5-5m5 5V6" />
                        </svg>

                    </div>
                    <div class="text-sm uppercase text-grey tracking-wide">
                        April Sales
                    </div>
                    </div>
                </div>
				 
					</div>
				</div>

				<div class="flex items-center justify-between mb-4">
					<h2 class="text-xl font-bold text-gray-800">Last Invoices</h2>

					<a href="#" class="text-blue-600 hover:text-blue-500 font-medium">View all</a>
				</div>
				<div class="overflow-x-auto bg-white rounded-lg shadow mb-8">
					<table class="w-full whitespace-no-wrap bg-white overflow-hidden table-striped">
						<thead class="bg-blue-50" style="position: sticky; top: 0;" >
							<tr class="text-left">
								<th class="px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs">Invoice</th>
								<th class="px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs">Name</th>
								<th class="px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs">Date</th>
								<th class="px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs text-right">Amount</th>
								<th class="px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs">Status</th>
							</tr>
						</thead> 
						<tbody>
							<tr class="focus-within:bg-gray-200 overflow-hidden">
								<td class="border-t">
									<span class="text-gray-700 px-6 py-4 flex items-center">#IN12345</span>
								</td> 
								<td class="border-t">
									<span class="text-gray-700 px-6 py-4 flex items-center">ABC Company</span>
								</td> 
								<td class="border-t">
									<span class="text-gray-700 px-6 py-4 flex items-center">10 Sep 2018</span>
								</td> 
								<td class="border-t">
									<span class="text-gray-700 px-6 py-4 flex items-center justify-end">₹12,000.00</span>
								</td> 
								<td class="border-t">
									<span class="px-6 py-4 flex items-center">
										<span class="px-2 rounded-full text-sm uppercase tracking-wide font-semibold bg-green-200 text-green-800">Completed</span>
									</span>
								</td>
							</tr>

							<tr class="focus-within:bg-gray-200 overflow-hidden">
								<td class="border-t">
									<span class="text-gray-700 px-6 py-4 flex items-center">#IN12344</span>
								</td> 
								<td class="border-t">
									<span class="text-gray-700 px-6 py-4 flex items-center">XYZ Company</span>
								</td> 
								<td class="border-t">
									<span class="text-gray-700 px-6 py-4 flex items-center">8 Sep 2018</span>
								</td> 
								<td class="border-t">
									<span class="text-gray-700 px-6 py-4 flex items-center justify-end">₹10,000.00</span>
								</td> 
								<td class="border-t">
									<span class="px-6 py-4 flex items-center">
										<span class="px-2 rounded-full text-sm uppercase tracking-wide font-semibold bg-orange-200 text-orange-800">Pending</span>
									</span>
								</td>
							</tr>

							<tr class="focus-within:bg-gray-200 overflow-hidden">
								<td class="border-t">
									<span class="text-gray-700 px-6 py-4 flex items-center">#IN12343</span>
								</td> 
								<td class="border-t">
									<span class="text-gray-700 px-6 py-4 flex items-center">CAC Company</span>
								</td> 
								<td class="border-t">
									<span class="text-gray-700 px-6 py-4 flex items-center">7 Sep 2018</span>
								</td> 
								<td class="border-t">
									<span class="text-gray-700 px-6 py-4 flex items-center justify-end">₹10,000.00</span>
								</td> 
								<td class="border-t">
									<span class="px-6 py-4 flex items-center">
										<span class="px-2 rounded-full text-sm uppercase tracking-wide font-semibold bg-blue-200 text-blue-800">Processing</span>
									</span>
								</td>
							</tr>

							<tr class="focus-within:bg-gray-200 overflow-hidden">
								<td class="border-t">
									<span class="text-gray-700 px-6 py-4 flex items-center">#IN12345</span>
								</td> 
								<td class="border-t">
									<span class="text-gray-700 px-6 py-4 flex items-center">ABC Company</span>
								</td> 
								<td class="border-t">
									<span class="text-gray-700 px-6 py-4 flex items-center">10 Sep 2018</span>
								</td> 
								<td class="border-t">
									<span class="text-gray-700 px-6 py-4 flex items-center justify-end">₹12,000.00</span>
								</td> 
								<td class="border-t">
									<span class="px-6 py-4 flex items-center">
										<span class="px-2 rounded-full text-sm uppercase tracking-wide font-semibold bg-green-200 text-green-800">Completed</span>
									</span>
								</td>
							</tr>

							<tr class="focus-within:bg-gray-200 overflow-hidden">
								<td class="border-t">
									<span class="text-gray-700 px-6 py-4 flex items-center">#IN12344</span>
								</td> 
								<td class="border-t">
									<span class="text-gray-700 px-6 py-4 flex items-center">XYZ Company</span>
								</td> 
								<td class="border-t">
									<span class="text-gray-700 px-6 py-4 flex items-center">8 Sep 2018</span>
								</td> 
								<td class="border-t">
									<span class="text-gray-700 px-6 py-4 flex items-center justify-end">₹10,000.00</span>
								</td> 
								<td class="border-t">
									<span class="px-6 py-4 flex items-center">
										<span class="px-2 rounded-full text-sm uppercase tracking-wide font-semibold bg-orange-200 text-orange-800">Pending</span>
									</span>
								</td>
							</tr>
 
						</tbody>
					</table>
				</div>

 
        <div class="flex-grow shadow border-b border-gray-200 sm:rounded-lg overflow-auto " style="height: 70vh;">
          <table class="relative min-w-full divide-y divide-gray-200">
            <thead class="bg-blue-500" style="position: sticky; top: 0;">
              <tr>
                <th scope="col" class="bg-blue-50 sticky top-0 px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Name
                </th>
                <th scope="col" class="bg-blue-50 sticky top-0 px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Stats
                </th>
                <th scope="col" class="bg-blue-50 sticky top-0 px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Status
                </th>
                <th scope="col" class="bg-blue-50 sticky top-0 px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Role
                </th>
                <th scope="col" class="bg-blue-50 sticky top-0 w-40 px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Actions
                </th>

              </tr>

            </thead>

            <?php foreach ($users as $user) : ?>
              <tbody class="bg-white divide-y divide-gray-200">
                <tr>
                  <td class=" w-72 px-2 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                      <div class="flex-shrink-0 h-10 w-10">
                        <img class="h-10 w-10 rounded-full" src="https://ui-avatars.com/api/?name=
                    <?= $user->username . $user->last_name ?>&background=random" alt="">
                      </div>
                      <div class="ml-2">
                        <div class="text-sm font-medium capitalize text-gray-900">
                          <?= $user->username . ' ' . $user->last_name ?>
                        </div>
                        <div class="text-sm text-gray-500">
                          <?= $user->email ?>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class=" w-64 px-2 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900"><?= $user->apartment ?></div>
                    <div class="text-sm text-gray-500"><?= $user->city ?></div>
                  </td>
                  <td class=" w-40 px-2 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                      Active Since
                    </span>
                    <?php
                    $date = strtotime($user->join_date);
                    $date =  date('Y-m-d ', $date);

                    ?>
                    <span><?php echo  $date; ?></span>
                  </td>
                  <td class="w-40 px-2 py-4 whitespace-nowrap text-sm text-gray-500">
                    <?php
                    if ($user->type == 0) {
                      echo "Admin";
                    } elseif ($user->type == 1) {
                      echo "Seller";
                    } else {
                      echo "Buyer";
                    }
                    ?>
                  </td>
                  <td class="w-40 px-2 py-4 whitespace-nowrap text-sm font-medium">
                    <div class="flex flex-row divide-x divide-green-500">
                      <a href="admin/edit/?user=<?= $user->username ?>" class="mr-2 text-indigo-600 hover:text-indigo-900">Edit</a>

                      <a href="admin/delete/?<?= $user->username ?>" class="ml-2 text-red-600 hover:text-red-900">Delete</a>
                    </div>
                  </td>
                </tr>
              <?php endforeach ?>
              <!-- More people... -->
              </tbody>
          </table>
        </div> 
			</div>
		</div>
	</div>
 