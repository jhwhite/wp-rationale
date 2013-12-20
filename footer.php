  <!-- Footer -->

  <footer class="row">
    <div class="large-12 columns">
      <hr />
      <div class="row">
        <div class="large-6 columns">
          <p>&copy; <?php echo date("Y"); ?></p>
        </div>
        <div class="large-6 columns">
          <ul class="inline-list">
            <?php wp_list_pages('title_li='); ?>
          </ul>
        </div>
      </div>
    </div>

  </footer>
  <!--
    <script src="js/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
  -->


    <?php wp_footer(); ?>
  </body>
</html>