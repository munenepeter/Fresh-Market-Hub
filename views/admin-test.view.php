<?php require 'partials/admin-nav.php'; ?>





<div class="md:max-w-6xl md:mx-auto px-4 py-8"> 
	<div class="flex items-center justify-between mb-4">
		<h2 class="text-xl font-bold text-gray-800">Quick Analytics</h2>
	</div>

	<div class="bg-yellow-200 mb-10 p-6 rounded-lg shadow">
		<div class="bg-yellow-50 flex">
			<div class=" w-1/3 text-center py-8 ">
				<div class="border-r border-green-400 text-center items-center">
					<div class="ml-20 flex text-grey-darker mb-2">
						<span class="text-3xl align-top">Ksh</span>
						<span class="text-5xl"><?= number_format($MaySales, 0, '.', ',') ?></span>
						<svg xmlns="http://www.w3.org/2000/svg" class="text-green-600 align-top h-6 w-6" fill="none"
							viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
								d="M17 13l-5 5m0 0l-5-5m5 5V6" />
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
						<span class="text-5xl"><?= number_format($AprilSales, 0, '.', ',') ?></span>
						<svg xmlns="http://www.w3.org/2000/svg" class="text-red-600 align-top h-6 w-6" fill="none"
							viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
								d="M17 13l-5 5m0 0l-5-5m5 5V6" />
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
						<span class="text-5xl"><?= number_format($MarchSales, 0, '.', ',') ?></span>
						<svg xmlns="http://www.w3.org/2000/svg" class="text-red-600 align-top h-6 w-6" fill="none"
							viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
								d="M17 13l-5 5m0 0l-5-5m5 5V6" />
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
			<thead class="bg-blue-50" style="position: sticky; top: 0;">
				<tr class="text-left">
					<th class="px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs">Invoice</th>
					<th class="px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs">Name</th>
					<th class="px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs">Date</th>
					<th class="px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs text-right">Amount
					</th>
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
							<span
								class="px-2 rounded-full text-sm uppercase tracking-wide font-semibold bg-green-200 text-green-800">Completed</span>
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
							<span
								class="px-2 rounded-full text-sm uppercase tracking-wide font-semibold bg-orange-200 text-orange-800">Pending</span>
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
							<span
								class="px-2 rounded-full text-sm uppercase tracking-wide font-semibold bg-blue-200 text-blue-800">Processing</span>
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
							<span
								class="px-2 rounded-full text-sm uppercase tracking-wide font-semibold bg-green-200 text-green-800">Completed</span>
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
							<span
								class="px-2 rounded-full text-sm uppercase tracking-wide font-semibold bg-orange-200 text-orange-800">Pending</span>
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
					<th scope="col"
						class="bg-blue-50 sticky top-0 px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
						Name
					</th>
					<th scope="col"
						class="bg-blue-50 sticky top-0 px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
						Stats
					</th>
					<th scope="col"
						class="bg-blue-50 sticky top-0 px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
						Status
					</th>
					<th scope="col"
						class="bg-blue-50 sticky top-0 px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
						Role
					</th>
					<th scope="col"
						class="bg-blue-50 sticky top-0 w-40 px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
						Actions
					</th>

				</tr>

			</thead>
	<tbody class="bg-white divide-y divide-gray-200">
			<?php foreach ($users as $user) : ?>
		
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
						<span
							class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
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
							<a href="admin/edit/?user=<?= $user->username ?>"
								class="mr-2 text-indigo-600 hover:text-indigo-900">Edit</a>

							<a href="admin/delete/?<?= $user->username ?>"
								class="ml-2 text-red-600 hover:text-red-900">Delete</a>
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