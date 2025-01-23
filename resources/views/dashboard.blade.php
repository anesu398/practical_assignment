<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Welcome Message -->
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-gray-900 dark:text-gray-100">
                    Welcome back, {{ Auth::user()->name }}!
                </h1>
                <p class="mt-2 text-gray-600 dark:text-gray-400">
                    Here's what's happening in your account today.
                </p>
            </div>

            <!-- Quick Stats/Summary Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <!-- Total Users Card -->
                <div class="bg-white dark:bg-gray-700 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <div class="text-gray-900 dark:text-gray-100">
                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Total Users</p>
                        <p class="text-2xl font-bold">1,234</p>
                    </div>
                </div>

                <!-- Total Revenue Card -->
                <div class="bg-white dark:bg-gray-700 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <div class="text-gray-900 dark:text-gray-100">
                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Total Revenue</p>
                        <p class="text-2xl font-bold">$12,345</p>
                    </div>
                </div>

                <!-- Active Projects Card -->
                <div class="bg-white dark:bg-gray-700 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <div class="text-gray-900 dark:text-gray-100">
                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Active Projects</p>
                        <p class="text-2xl font-bold">15</p>
                    </div>
                </div>

                <!-- Pending Tasks Card -->
                <div class="bg-white dark:bg-gray-700 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <div class="text-gray-900 dark:text-gray-100">
                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Pending Tasks</p>
                        <p class="text-2xl font-bold">7</p>
                    </div>
                </div>
            </div>

            <!-- Charts/Graphs Section -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
                <!-- Example: Line Chart -->
                <div class="bg-white dark:bg-gray-700 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-4">Monthly Revenue</h3>
                    <div class="chart-container" style="position: relative; height: 300px;">
                        <canvas id="revenueChart"></canvas>
                    </div>
                </div>

                <!-- Example: Bar Chart -->
                <div class="bg-white dark:bg-gray-700 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-4">User Signups</h3>
                    <div class="chart-container" style="position: relative; height: 300px;">
                        <canvas id="signupsChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- Recent Activity/Notifications -->
            <div class="bg-white dark:bg-gray-700 overflow-hidden shadow-sm sm:rounded-lg p-6 mb-8">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-4">Recent Activity</h3>
                <ul class="space-y-4">
                    <li class="text-gray-900 dark:text-gray-100">
                        <span class="font-medium">John Doe</span> created a new project.
                        <span class="text-sm text-gray-500 dark:text-gray-400">2 hours ago</span>
                    </li>
                    <li class="text-gray-900 dark:text-gray-100">
                        <span class="font-medium">Jane Smith</span> updated the settings.
                        <span class="text-sm text-gray-500 dark:text-gray-400">5 hours ago</span>
                    </li>
                    <li class="text-gray-900 dark:text-gray-100">
                        <span class="font-medium">You</span> logged in.
                        <span class="text-sm text-gray-500 dark:text-gray-400">1 day ago</span>
                    </li>
                </ul>
            </div>

            <!-- Quick Links/Actions -->
            <div class="bg-white dark:bg-gray-700 overflow-hidden shadow-sm sm:rounded-lg p-6 mb-8">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-4">Quick Actions</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <a href="#" class="bg-blue-500 text-white text-center py-3 px-4 rounded-lg hover:bg-blue-600 transition duration-300">
                        Create New Project
                    </a>
                    <a href="#" class="bg-green-500 text-white text-center py-3 px-4 rounded-lg hover:bg-green-600 transition duration-300">
                        Add User
                    </a>
                    <a href="#" class="bg-purple-500 text-white text-center py-3 px-4 rounded-lg hover:bg-purple-600 transition duration-300">
                        Generate Report
                    </a>
                    <a href="#" class="bg-red-500 text-white text-center py-3 px-4 rounded-lg hover:bg-red-600 transition duration-300">
                        Delete Old Data
                    </a>
                    <!-- New CMS Buttons -->
                    <a href="/cms/posts" class="bg-yellow-500 text-white text-center py-3 px-4 rounded-lg hover:bg-yellow-600 transition duration-300">
                        Manage Posts
                    </a>
                    <a href="/cms/pages" class="bg-indigo-500 text-white text-center py-3 px-4 rounded-lg hover:bg-indigo-600 transition duration-300">
                        Manage Pages
                    </a>
                    <a href="/cms/categories" class="bg-teal-500 text-white text-center py-3 px-4 rounded-lg hover:bg-teal-600 transition duration-300">
                        Manage Categories
                    </a>
                    <a href="/cms/tags" class="bg-orange-500 text-white text-center py-3 px-4 rounded-lg hover:bg-orange-600 transition duration-300">
                        Manage Tags
                    </a>
                </div>
            </div>

            <!-- Upcoming Events/Tasks -->
            <div class="bg-white dark:bg-gray-700 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-4">Upcoming Events</h3>
                <ul class="space-y-4">
                    <li class="text-gray-900 dark:text-gray-100">
                        <span class="font-medium">Team Meeting</span>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Tomorrow at 10:00 AM</span>
                    </li>
                    <li class="text-gray-900 dark:text-gray-100">
                        <span class="font-medium">Project Deadline</span>
                        <span class="text-sm text-gray-500 dark:text-gray-400">In 3 days</span>
                    </li>
                    <li class="text-gray-900 dark:text-gray-100">
                        <span class="font-medium">Client Call</span>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Next Monday at 2:00 PM</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Chart.js Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Example Line Chart (Monthly Revenue)
        const revenueCtx = document.getElementById('revenueChart').getContext('2d');
        new Chart(revenueCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Revenue',
                    data: [5000, 7000, 9000, 12000, 10000, 15000],
                    borderColor: 'rgba(99, 102, 241, 1)',
                    backgroundColor: 'rgba(99, 102, 241, 0.2)',
                    fill: true,
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false, // Prevent the chart from growing
                scales: {
                    y: {
                        beginAtZero: true,
                    }
                }
            }
        });

        // Example Bar Chart (User Signups)
        const signupsCtx = document.getElementById('signupsChart').getContext('2d');
        new Chart(signupsCtx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Signups',
                    data: [50, 70, 90, 120, 100, 150],
                    backgroundColor: 'rgba(16, 185, 129, 0.6)',
                    borderColor: 'rgba(16, 185, 129, 1)',
                    borderWidth: 1,
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false, 
                scales: {
                    y: {
                        beginAtZero: true,
                    }
                }
            }
        });
    </script>
</x-app-layout>