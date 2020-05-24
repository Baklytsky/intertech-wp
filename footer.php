

<footer id="footer" class="container-fluid indent text-center">
    <?php $name = get_field( 'author_name' );
    if ( ! empty( $name ) ): ?>
    <p class="text-center py-3">
        <?php echo $name; ?>
    </p>
    <?php endif; ?>
</footer>

</div>

<?php wp_footer(); ?>

</body>

</html>

