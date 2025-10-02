<?php
/**
 * Script to reset WordPress homepage to default (blog page)
 */

// Include WordPress
require_once('../wp-config.php');

// Reset homepage to show blog posts
update_option('show_on_front', 'posts');
update_option('page_on_front', 0);
update_option('page_for_posts', 0);

echo "<h2>✅ Đã reset thành công!</h2>";
echo "<p>Trang chủ đã được khôi phục về mặc định (hiển thị blog posts)</p>";
echo "<p><strong>URL trang chủ:</strong> <a href='" . home_url() . "' target='_blank'>" . home_url() . "</a></p>";

echo "<hr>";
echo "<h3>⚙️ Đã thực hiện:</h3>";
echo "<ul>";
echo "<li>✅ Reset show_on_front = 'posts'</li>";
echo "<li>✅ Reset page_on_front = 0</li>";
echo "<li>✅ Reset page_for_posts = 0</li>";
echo "</ul>";

echo "<hr>";
echo "<p><em>Trang chủ đã quay về trạng thái mặc định!</em></p>";
?>
