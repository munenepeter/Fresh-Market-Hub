<?php require 'partials/head.php'; ?>

<!-- <div class="flex flex-col h-screen">
    <div class="flex-grow overflow-auto">
      <table class="relative w-full border"> -->



<div class="px-4 py-2 ">
<div class="flex flex-col">
  <div class="my-2 overflow-x-auto sm:-mx-6 lg:mx-8  ">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-2 " >
      <div class="flex-grow shadow border-b border-gray-200 sm:rounded-lg overflow-auto "style="height: 70vh;">
        <table class="relative min-w-full divide-y divide-gray-200" >
          <thead class="bg-blue-500" style="position: sticky; top: 0;">
            <tr>
              <th scope="col" class="bg-blue-50 sticky top-0 px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Name
              </th>
              <th  scope="col" class="bg-blue-50 sticky top-0 px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
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
         
          <?php foreach($users as $user): ?>
          <tbody class="bg-white divide-y divide-gray-200" >
            <tr>
              <td class=" w-72 px-2 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="flex-shrink-0 h-10 w-10">
                    <img class="h-10 w-10 rounded-full" src="https://ui-avatars.com/api/?name=
                    <?=$user->username.$user->last_name?>&background=random" alt="">
                  </div>
                  <div class="ml-2">
                    <div class="text-sm font-medium capitalize text-gray-900">
                    <?=$user->username .' '. $user->last_name?>
                    </div>
                    <div class="text-sm text-gray-500">
                    <?=$user->email?>
                    </div>
                  </div>
                </div>
              </td>
              <td class=" w-64 px-2 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900"><?=$user->apartment ?></div>
                <div class="text-sm text-gray-500"><?= $user->city ?></div>
              </td>
              <td class=" w-40 px-2 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                  Active Since
                </span>
                <?php
                $date = strtotime($user->join_date);
                $date =  date('Y-m-d ', $date );
                 
                ?>
                <span><?php echo  $date; ?></span>
              </td>
              <td class="w-40 px-2 py-4 whitespace-nowrap text-sm text-gray-500">
                <?php 
               if($user->type == 0){
                   echo "Admin";
               }elseif($user->type == 1){
                   echo "Seller";
               }else{
                   echo "Buyer";
               }
                ?>
              </td>
              <td class="w-40 px-2 py-4 whitespace-nowrap text-sm font-medium">
              <div class="flex flex-row divide-x divide-green-500">
                <a href="admin/edit/?user=<?=$user->username?>" class="mr-2 text-indigo-600 hover:text-indigo-900">Edit</a>
                      
                <a href="admin/delete/?<?=$user->username?>" class="ml-2 text-red-600 hover:text-red-900">Delete</a>
              </div>
              </td>
            </tr>
           <?php endforeach?>
            <!-- More people... -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>