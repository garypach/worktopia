<?php loadPartial('head') ?>
<?php loadPartial('navbar') ?>

<?php loadPartial('top-banner') ?>




<section class="flex justify-center items-center mt-20">
    <div class="bg-white p-8 rounded-lg shadow-md w-full md:w-600 mx-6">
        <h2 class="text-4xl text-center font-bold mb-4">Create Job Listing</h2>

        <form method="POST" action="/listings">
            <h2 class="text-2xl font-bold mb-6 text-center text-gray-500">
                Job Info
            </h2>
            <?php loadPartial('message') ?>
            <div class="mb-4">
                <input type="text" value="<?= $listing['title'] ?? '' ?>" name="title" placeholder="Job Title" class="w-full px-4 py-2 border rounded focus:outline-none" />
            </div>
            <div class="mb-4">
                <textarea name="description" placeholder="Job Description" class="w-full px-4 py-2 border rounded focus:outline-none"> <?= $listing['description'] ?></textarea>
            </div>
            <div class="mb-4">
                <input type="text" value="<?= $listing['salary'] ?? ''  ?>" name="salary" placeholder="Annual Salary" class="w-full px-4 py-2 border rounded focus:outline-none" />
            </div>
            <div class="mb-4">
                <input type="text" value="<?= $listing['requiments'] ?? ''  ?>" name="requirements" placeholder="Requirements" class="w-full px-4 py-2 border rounded focus:outline-none" />
            </div>
            <div class="mb-4">
                <input type="text" value="<?= $listing['benefits'] ?? ''  ?>" name="benefits" placeholder="Benefits" class="w-full px-4 py-2 border rounded focus:outline-none" />
            </div>
            <div class="mb-4">
                <input type="text" value="<?= $listing['tags'] ?? ''  ?>" name="tags" placeholder="tags" class="w-full px-4 py-2 border rounded focus:outline-none" />
            </div>
            <h2 class="text-2xl font-bold mb-6 text-center text-gray-500">
                Company Info & Location
            </h2>
            <div class="mb-4">
                <input type="text" value="<?= $listing['company'] ?? ''  ?>" name="company" placeholder="Company Name" class="w-full px-4 py-2 border rounded focus:outline-none" />
            </div>
            <div class="mb-4">
                <input type="text" value="<?= $listing['address'] ?? ''  ?>" name="address" placeholder="Address" class="w-full px-4 py-2 border rounded focus:outline-none" />
            </div>
            <div class="mb-4">
                <input type="text" value="<?= $listing['city'] ?? '' ?>" name="city" placeholder="City" class="w-full px-4 py-2 border rounded focus:outline-none" />
            </div>
            <div class="mb-4">
                <input type="text" value="<?= $listing['state'] ?? '' ?>" name="state" placeholder="State" class="w-full px-4 py-2 border rounded focus:outline-none" />
            </div>
            <div class="mb-4">
                <input type="text" value="<?= $listing['phone'] ?? '' ?>" name="phone" placeholder="Phone" class="w-full px-4 py-2 border rounded focus:outline-none" />
            </div>
            <div class="mb-4">
                <input type="email" value="<?= $listing['email'] ?? ''  ?>" name="email" placeholder="Email Address For Applications" class="w-full px-4 py-2 border rounded focus:outline-none" />
            </div>
            <button class="w-full bg-green-500 hover:bg-green-600 text-white px-4 py-2 my-3 rounded focus:outline-none">
                Save
            </button>
            <a href="/" class="block text-center w-full bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded focus:outline-none">
                Cancel
            </a>
        </form>
    </div>
</section>

<!-- Bottom Banner -->
<section class="container mx-auto my-6">
    <div class="bg-blue-800 text-white rounded p-4 flex items-center justify-between">
        <div>
            <h2 class="text-xl font-semibold">Looking to hire?</h2>
            <p class="text-gray-200 text-lg mt-2">
                Post your job listing now and find the perfect candidate.
            </p>
        </div>
        <a href="post-job.html" class="bg-yellow-500 hover:bg-yellow-600 text-black px-4 py-2 rounded hover:shadow-md transition duration-300">
            <i class="fa fa-edit"></i> Post a Job
        </a>
    </div>
</section>
<?php loadPartial('bottom-banner') ?>
<?php loadPartial('footer') ?>