<?php require_once "_header.php"; ?>
<?php require_once "../_db-conn.php"; ?>

<?php
// Get the slug from the URL
$slug = mysqli_real_escape_string($conn, $_GET['slug']); // Sanitize input
$query = "SELECT * FROM blogs_gd WHERE slug = '$slug'";

$result = mysqli_query($conn, $query);
if ($result) {
    $blog = mysqli_fetch_assoc($result);
    if ($blog) {
        $title = $blog['title'];
        $article = $blog['article'];
        $recent_posts = $blog['recent_posts'];
        $categories = $blog['categories'];
        $meta_title = $blog['meta_title'];
        $meta_desc = $blog['meta_desc'];
    } else {
        // Handle case where blog post is not found
        echo "Blog post not found.";
        exit;
    }
} else {
    // Handle query error
    echo "Database query failed.";
    exit;
}
?>

<?php require_once "../_navbar.php"; ?>

<section>
    <div class="blog_header max-w-screen-xl mx-auto px-4 py-8 gap-12 text-gray-600 overflow-hidden md:px-8 md:flex">
        <div class="flex flex-col space-y-5 justify-between ">
            <h1 class="text-3xl bg-gradient-to-r from-amber-500 to-pink-500 bg-clip-text text-transparent font-extrabold sm:text-5xl ">
                <?php echo htmlspecialchars($meta_title); ?>
            </h1>

            <?php require_once "../_breadcrumbs.php"; ?>
        </div>

    </div>
</section>
<hr>
<div class="flex flex-col md:flex-row justify-evenly content-center items-start">
    <div class="flex flex-col mt-12 bg-white border sm:justify-center border-gray-700 rounded-2xl">
        <?php echo htmlspecialchars($article); ?>
    </div>
    <div class="w-80">
        <div>
            <?php require_once "_right-contact-form.php"; ?>
        </div>
        <div class="flex flex-wrap flex-col px-4 py-4 mt-8 min-w-[240px]">
            <span class="text-2xl font-bold text-red-500 border-b border-gray-900 border-spacing-6">Recent Posts</span>
            <ul class="py-8">
                <?php
                $query = "SELECT * FROM blogs_gd ORDER BY id DESC LIMIT 4";
                $result = mysqli_query($conn, $query);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        // Use slug in the link
                        $postSlug = htmlspecialchars($row['slug']);
                        echo "<li class='flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900'>";
                        echo "<a href='blog.php?slug=$postSlug'>" . htmlspecialchars($row['title']) . "</a></li>";
                    }
                }
                ?>
            </ul>
        </div>

    </div>
</div>

<?php require_once "_footer.php"; ?>
</body>

</html>
