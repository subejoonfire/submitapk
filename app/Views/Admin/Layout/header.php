<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="tailwind,admin template,dashboard">
    <title><?= $title ?? 'Dashboard'; ?></title>

    <!-- Styles -->
    <link rel="stylesheet" href="<?= base_url('Assets/dist/styles.css') ?>">
    <link rel="stylesheet" href="<?= base_url('Assets/dist/all.css') ?>">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
</head>

<body>
    <div class="mx-auto bg-grey-400">
        <div class="min-h-screen flex flex-col">
            <!-- Header -->
            <header class="bg-nav">
                <div class="flex justify-between">
                    <div class="p-1 mx-3 inline-flex items-center">
                        <button onclick="sidebarToggle()" class="text-white focus:outline-none pr-2">
                            <i class="fas fa-bars"></i>
                        </button>
                        <h1 class="text-white p-2">Logo</h1>
                    </div>
                    <div class="p-1 flex flex-row items-center">
                        <a href="#" class="text-white p-2 mr-2 hidden md:block lg:block">Github</a>
                        <img onclick="profileToggle()" class="inline-block h-8 w-8 rounded-full"
                            src="https://avatars0.githubusercontent.com/u/4323180?s=460&v=4" alt="">
                        <a href="#" onclick="profileToggle()" class="text-white p-2 hidden md:block lg:block">Admin</a>
                        <div id="ProfileDropDown"
                            class="rounded hidden shadow-md bg-white absolute pin-t mt-12 mr-1 pin-r">
                            <ul class="list-reset">
                                <li><a href="<?= base_url('logout') ?>"
                                        class="px-4 py-2 block text-black hover:bg-grey-light">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
            <!-- /Header -->

            <div class="flex flex-1">
                <!-- Sidebar -->
                <aside id="sidebar" class="bg-side-nav w-1/2 md:w-1/6 lg:w-1/6 border-r hidden md:block lg:block">
                    <ul class="list-reset flex flex-col">
                        <li class="border-b hover:bg-gray-200 transition">
                            <a href="<?= base_url('admin'); ?>"
                                class="block w-full py-3 px-4 text-sm text-nav-item no-underline">
                                <i class="fas fa-tachometer-alt mx-2"></i> Dashboard
                            </a>
                        </li>
                    </ul>
                </aside>
                <!-- /Sidebar -->

                <!-- Main -->
                <main class="flex-1 bg-white-300 p-3 overflow-hidden">