  </div>
  <footer style='padding:20px 30px;width:100%;border-top:1px solid #e2e2e2;box-sizing:border-box;'>
    <div class='content-container'>&copy;<?php echo date('Y');?> Frank Collins Development</div>
  </footer>
</body>
<?php wp_footer(); ?>
<?php
if (function_exists('is_product') && is_product()) {
?>
  <script src="<?php echo get_stylesheet_directory_uri(). '/js/add-to-cart.js' ?>" ></script>
<?php
} ?>
</html>
