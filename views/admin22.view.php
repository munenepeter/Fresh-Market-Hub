<?php require 'partials/head.php'; ?>



<div class="flex-grow container mx-auto sm:px-4 pt-6 pb-8">
  <div class="bg-white border-t border-b sm:border-l sm:border-r sm:rounded shadow mb-6">


    <?php
    $Total = (int)$BestSeller[0]['Amount'] + (int)$BestSeller[1]['Amount'] + (int)$BestSeller[2]['Amount'];

    function getPercent($Total, $One) {
      $percent = ($One / $Total) * 100;
      return   number_format($percent, 0, '.', ',');
    } 

    ?>
    <div class="flex">
      <div class="w-1/3 text-center py-8">
        <div class="border-r">
          <div class="text-grey-darker mb-2">
            <span class="text-3xl align-top">Ksh</span>
            <span class="text-5xl"><?= number_format($MaySales, 2, '.', ',') ?></span>

          </div>
          <div class="text-sm uppercase text-grey tracking-wide">
            May Sales
          </div>
        </div>
      </div>
      <div class="w-1/3 text-center py-8 ">
        <div class="border-r text-center items-center">
          <div class="ml-20 flex text-grey-darker mb-2">
            <span class="text-3xl align-top">Ksh</span>
            <span class="text-5xl"><?= number_format($AprilSales, 2, '.', ',') ?></span>
            <svg xmlns="http://www.w3.org/2000/svg" class="text-red-600 align-top h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 13l-5 5m0 0l-5-5m5 5V6" />
            </svg>

          </div>
          <div class="text-sm uppercase text-grey tracking-wide">
            April Sales
          </div>
        </div>
      </div>
      <div class="w-1/3 text-center py-8">
        <div>
          <div class="ml-16 flex  text-grey-darker mb-2">
            <span class="text-3xl align-top">Ksh</span>
            <span class="text-5xl"><?= number_format($MarchSales, 2, '.', ',') ?></span>
            <svg xmlns="http://www.w3.org/2000/svg" class="text-green-600 align-top h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11l5-5m0 0l5 5m-5-5v12" />
            </svg>
          </div>
          <div class="text-sm uppercase text-grey tracking-wide">
            March Sales
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="flex flex-wrap -mx-4">
    <div class="w-full mb-6 lg:mb-0 lg:w-1/2 px-4 flex flex-col">
      <div class="flex-grow flex flex-col bg-white border-t border-b sm:rounded sm:border shadow overflow-hidden">
        <div class="border-b">
          <div class="flex justify-between px-6 -mb-px">
            <h3 class="text-blue-dark py-4 font-normal text-lg">Best Sellers</h3>
            <div class="flex">
              <button type="button" class="appearance-none py-4 text-blue-dark border-b border-blue-dark mr-3">
                All Sellers
              </button>

            </div>
          </div>
        </div>
        
        <div class="flex-grow flex px-6 py-6 text-grey-darker items-center border-b -mx-4">
          <div class="w-2/5 xl:w-1/4 px-2 flex items-center">
            <div class="flex-shrink-0 h-10 w-10 mr-2">
              <img class="h-10 w-10 rounded-full" src="https://ui-avatars.com/api/?name=
                    <?= $BestSeller[2]['username'] ?>&background=random" alt="">
            </div>
            <span class="text-lg capitalize"><?=
                                              strlen($BestSeller[2]['username']) > 9 ? substr($BestSeller[2]['username'], 0, 9) . " " : $BestSeller[2]['username'];

                                              ?></span>
          </div>
          <div class="hidden md:flex lg:hidden xl:flex w-1/4 px-4 items-center">
          <div class="bg-blue-300 h-2 w-8 rounded-full flex-grow mr-2"></div> 
   
            <?= getPercent($Total, $BestSeller[2]['Amount'])?>%
          </div>
          <div class="flex w-3/5 md:w/12">
            <div class="w-1/2 px-4">
              <div class="text-right">
                <?= number_format($BestSeller[2]['Sales'], 0, '.', ',')  ?>
              </div>
            </div>
            <div class="w-1/2 px-4">
              <div class="text-right text-grey">
                Ksh <?= number_format($BestSeller[2]['Amount'], 2, '.', ',') ?>
              </div>
            </div>
          </div>
        </div>
        <div class="flex-grow flex px-6 py-6 text-grey-darker items-center border-b -mx-4">
          <div class="w-2/5 xl:w-1/4 px-2 flex items-center">
            <div class="flex-shrink-0 h-10 w-10 mr-2">
              <img class="h-10 w-10 rounded-full" src="https://ui-avatars.com/api/?name=
                    <?= $BestSeller[0]['username'] ?>&background=random" alt="">
            </div>
            <span class="text-lg capitalize"><?= $BestSeller[0]['username'] ?></span>
          </div>
          <div class="hidden md:flex lg:hidden xl:flex w-1/4 px-4 items-center">
          <div class="bg-green-300 h-2 w-8  rounded-full mr-2"></div> 
            <?=getPercent($Total, $BestSeller[0]['Amount'])?>%
          </div>
          <div class="flex w-3/5 md:w/12">
            <div class="w-1/2 px-4">
              <div class="text-right">
                <?= number_format($BestSeller[0]['Sales'], 0, '.', ',') ?>
              </div>
            </div>
            <div class="w-1/2 px-4">
              <div class="text-right text-grey">
                Ksh <?= number_format($BestSeller[0]['Amount'], 2, '.', ',') ?>
              </div>
            </div>
          </div>
        </div>
        <div class="flex-grow flex px-6 py-6 text-grey-darker items-center border-b -mx-4">
          <div class="w-2/5 xl:w-1/4 px-2 flex items-center">
            <div class="flex-shrink-0 h-10 w-10 mr-2">
              <img class="h-10 w-10 rounded-full" src="https://ui-avatars.com/api/?name=
                    <?= $BestSeller[1]['username'] ?>&background=random" alt="">
            </div>
            <span class="text-lg capitalize"><?= $BestSeller[0]['username'] ?></span>
          </div>
          <div class="hidden md:flex lg:hidden xl:flex w-1/4 px-4 items-center">
            <div class="bg-indigo-300 h-2 w-6 rounded-full mr-2"></div>
            <?=getPercent($Total, $BestSeller[1]['Amount'])?>%
          </div>
          <div class="flex w-3/5 md:w/12">
            <div class="w-1/2 px-4">
              <div class="text-right">
                <?= number_format($BestSeller[1]['Sales'], 0, '.', ',')  ?>
              </div>
            </div>
            <div class="w-1/2 px-4">
              <div class="text-right text-grey">
                Ksh <?= number_format($BestSeller[1]['Amount'], 2, '.', ',')  ?>
              </div>
            </div>
          </div>
        </div>
        <div class="px-6 py-4">
          <div class="text-center text-grey">

            Total Balance &asymp; Ksh <?= number_format($Total, 2, '.', ',') ?>
          </div>
        </div>
      </div>
    </div>
    <div class="w-full lg:w-1/2 px-4">
      <div class="bg-white border-t border-b sm:rounded sm:border shadow">
        <div class="border-b">
          <div class="flex justify-between px-6 -mb-px">
            <h3 class="text-blue-900 py-4 font-normal text-lg">Recent Activity</h3>
          </div>
        </div>
        <div>
          <div class="text-center px-6 py-4">
            <div class="py-8">
              <div class="mb-4">
                <svg class="inline-block fill-current text-grey h-16 w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path d="M11.933 13.069s7.059-5.094 6.276-10.924a.465.465 0 0 0-.112-.268.436.436 0 0 0-.263-.115C12.137.961 7.16 8.184 7.16 8.184c-4.318-.517-4.004.344-5.974 5.076-.377.902.234 1.213.904.959l2.148-.811 2.59 2.648-.793 2.199c-.248.686.055 1.311.938.926 4.624-2.016 5.466-1.694 4.96-6.112zm1.009-5.916a1.594 1.594 0 0 1 0-2.217 1.509 1.509 0 0 1 2.166 0 1.594 1.594 0 0 1 0 2.217 1.509 1.509 0 0 1-2.166 0z" />
                </svg>
              </div>
              <p class="text-2xl text-grey-darker font-medium mb-4">No sells yet</p>

              <div>
                <button type="button" class="bg-blue-600 hover:bg-blue-900 text-white border border-blue-dark rounded px-6 py-4">Refresh</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="px-4 py-2 ">
  <div class="flex flex-col">
    <div class="my-2 overflow-x-auto sm:-mx-6 lg:mx-8  ">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-2 ">
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
</div>