<?php if ( is_active_sidebar( 'maxstore-footer-area' ) ) { ?>  				
	<div id="content-footer-section" class="row clearfix">    				
		<?php dynamic_sidebar( 'maxstore-footer-area' ) ?>  				
	</div>		
<?php } ?>         
<footer id="colophon" class="rsrc-footer" role="contentinfo">                
	<div class="row rsrc-author-credits">                                       
		<div class="text-center">
			<?php printf( __( 'Copyright &copy; %1$s | <strong>Chợ Công Nghệ</strong> powered by %2$s', 'maxstore' ), date( "Y" ), '<a href="' . esc_url( '#' ) . '" title="Super handsome developer">Jimmy</a>' ); ?>
		</div>                                  
	</div>    
</footer>
<div id="back-top">  
	<a href="#top">
		<span></span>
	</a>
</div>
</div>
<!-- end main container -->
<?php wp_footer(); ?>
</body>
</html>