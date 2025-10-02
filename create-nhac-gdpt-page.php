<?php
/**
 * Script to create GDPT Music page automatically
 * Run this file once to create the page
 */

// Include WordPress
require_once('../wp-config.php');

// Check if page already exists
$existing_page = get_page_by_path('nhac-gdpt');

if (!$existing_page) {
    // Create new page
    $page_data = array(
        'post_title'    => 'Danh sách nhạc GDPT',
        'post_content'  => '', // Content will come from template
        'post_status'   => 'publish',
        'post_type'     => 'page',
        'post_name'     => 'nhac-gdpt', // URL slug
        'page_template' => 'page-nhac-gdpt.php'
    );
    
    // Insert the page
    $page_id = wp_insert_post($page_data);
    
    if ($page_id) {
        // Set the page template
        update_post_meta($page_id, '_wp_page_template', 'page-nhac-gdpt.php');
        
        echo "<h2>✅ Thành công!</h2>";
        echo "<p>Trang 'Danh sách nhạc GDPT' đã được tạo thành công!</p>";
        echo "<p><strong>ID trang:</strong> " . $page_id . "</p>";
        echo "<p><strong>URL:</strong> <a href='" . get_permalink($page_id) . "' target='_blank'>" . get_permalink($page_id) . "</a></p>";
        echo "<p><strong>Template:</strong> page-nhac-gdpt.php</p>";
        
        echo "<hr>";
        echo "<h3>🔗 Links:</h3>";
        echo "<ul>";
        echo "<li><a href='" . get_permalink($page_id) . "' target='_blank'>Xem trang</a></li>";
        echo "<li><a href='" . admin_url('post.php?post=' . $page_id . '&action=edit') . "' target='_blank'>Chỉnh sửa trang</a></li>";
        echo "<li><a href='" . admin_url('edit.php?post_type=page') . "' target='_blank'>Danh sách trang</a></li>";
        echo "</ul>";
    } else {
        echo "<h2>❌ Lỗi!</h2>";
        echo "<p>Không thể tạo trang. Vui lòng thử lại.</p>";
    }
} else {
    echo "<h2>ℹ️ Thông báo</h2>";
    echo "<p>Trang 'Danh sách nhạc GDPT' đã tồn tại!</p>";
    echo "<p><strong>ID trang:</strong> " . $existing_page->ID . "</p>";
    echo "<p><strong>URL:</strong> <a href='" . get_permalink($existing_page->ID) . "' target='_blank'>" . get_permalink($existing_page->ID) . "</a></p>";
    
    // Update template if needed
    $current_template = get_post_meta($existing_page->ID, '_wp_page_template', true);
    if ($current_template !== 'page-nhac-gdpt.php') {
        update_post_meta($existing_page->ID, '_wp_page_template', 'page-nhac-gdpt.php');
        echo "<p>✅ Đã cập nhật template thành page-nhac-gdpt.php</p>";
    }
    
    echo "<hr>";
    echo "<h3>🔗 Links:</h3>";
    echo "<ul>";
    echo "<li><a href='" . get_permalink($existing_page->ID) . "' target='_blank'>Xem trang</a></li>";
    echo "<li><a href='" . admin_url('post.php?post=' . $existing_page->ID . '&action=edit') . "' target='_blank'>Chỉnh sửa trang</a></li>";
    echo "<li><a href='" . admin_url('edit.php?post_type=page') . "' target='_blank'>Danh sách trang</a></li>";
    echo "</ul>";
}

echo "<hr>";
echo "<p><em>File này chỉ chạy một lần để tạo trang. Bạn có thể xóa file này sau khi tạo xong.</em></p>";
?>
