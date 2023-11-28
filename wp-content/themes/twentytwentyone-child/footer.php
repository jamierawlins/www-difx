<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

	<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>

	<footer id="colophon" class="site-footer">
		<img src="https://digitalimagingfx.com/wp-content/uploads/2023/10/DIFX-logo-1024x502-1.png">
		<div class="social">
			<ul>
				<li>
				<a href=""></a>	
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="59" height="59" viewBox="0 0 59 59" fill="none">
<circle cx="29.2039" cy="29.2039" r="29.2039" fill="#F6C700"/>
<mask id="mask0_667_464" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="59" height="59">
<circle cx="29.2039" cy="29.2039" r="29.2039" fill="#F6C700"/>
</mask>
<g mask="url(#mask0_667_464)">
<rect y="14.2773" width="59.0568" height="29.8529" fill="url(#pattern0)"/>
</g>
<defs>
<pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
<use xlink:href="#image0_667_464" transform="matrix(0.00174308 0 0 0.00344828 -0.00113675 0)"/>
</pattern>
<image id="image0_667_464" width="575" height="290" xlink:href="data:image/png;base64,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"/>
</defs>
</svg></a></li>
				<li><a href="https://www.instagram.com/digitalimagingfx"><svg xmlns="http://www.w3.org/2000/svg" width="59" height="59" viewBox="0 0 59 59" fill="none">
<g clip-path="url(#clip0_667_469)">
<path d="M37.8141 15.498H20.4527C17.6815 15.498 15.427 17.7526 15.427 20.5237V37.8851C15.427 40.6563 17.6815 42.9115 20.4527 42.9115H37.8141C40.5852 42.9115 42.8404 40.6569 42.8404 37.8851V20.5237C42.8404 17.7526 40.5859 15.498 37.8141 15.498ZM29.1334 38.2291C24.1577 38.2291 20.1094 34.1808 20.1094 29.2044C20.1094 24.2287 24.1577 20.1804 29.1334 20.1804C34.1097 20.1804 38.158 24.2287 38.158 29.2044C38.158 34.1801 34.1091 38.2291 29.1334 38.2291ZM38.4481 22.0462C37.2702 22.0462 36.3124 21.0883 36.3124 19.9111C36.3124 18.7338 37.2702 17.776 38.4481 17.776C39.6254 17.776 40.5833 18.7338 40.5833 19.9111C40.5833 21.0883 39.6254 22.0462 38.4481 22.0462Z" fill="#6A453B"/>
<path d="M29.1334 23.9941C26.261 23.9941 23.9221 26.3318 23.9221 29.2041C23.9221 32.0778 26.261 34.416 29.1334 34.416C32.0071 34.416 34.344 32.0778 34.344 29.2041C34.344 26.3324 32.0064 23.9941 29.1334 23.9941Z" fill="#6A453B"/>
<path d="M29.1335 0C13.0486 0 0.00805664 13.0405 0.00805664 29.1254C0.00805664 45.2103 13.0486 58.2508 29.1335 58.2508C45.2183 58.2508 58.2589 45.2103 58.2589 29.1254C58.2589 13.0405 45.2183 0 29.1335 0ZM46.6532 37.8846C46.6532 42.7591 42.6886 46.7237 37.8142 46.7237H20.4528C15.5789 46.7237 11.6137 42.7591 11.6137 37.8846V20.5232C11.6137 15.6494 15.5789 11.6842 20.4528 11.6842H37.8142C42.6886 11.6842 46.6532 15.6494 46.6532 20.5232V37.8846Z" fill="#6A453B"/>
</g>
<defs>
<clipPath id="clip0_667_469">
<rect width="58.2508" height="58.2508" fill="white" transform="translate(0.00805664)"/>
</clipPath>
</defs>
</svg></a></li>
				<li><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="59" height="59" viewBox="0 0 59 59" fill="none">
<g clip-path="url(#clip0_667_474)">
<path d="M29.796 58.4059C45.9249 58.4059 58.9999 45.3309 58.9999 29.202C58.9999 13.0731 45.9249 -0.00195312 29.796 -0.00195312C13.6671 -0.00195312 0.592041 13.0731 0.592041 29.202C0.592041 45.3309 13.6671 58.4059 29.796 58.4059Z" fill="#007AB9"/>
<path d="M47.2451 31.5519V43.5921H40.2645V32.3589C40.2645 29.5383 39.2567 27.6121 36.7292 27.6121C34.8004 27.6121 33.6546 28.9089 33.1486 30.1646C32.9648 30.6133 32.9175 31.2365 32.9175 31.8659V43.5916H25.9364C25.9364 43.5916 26.0301 24.5662 25.9364 22.5968H32.918V25.5719C32.9039 25.5954 32.8841 25.6183 32.8716 25.6407H32.918V25.5719C33.8457 24.1445 35.5001 22.1038 39.2093 22.1038C43.8019 22.1038 47.2451 25.1045 47.2451 31.5519ZM18.6336 12.4766C16.2456 12.4766 14.6833 14.0441 14.6833 16.1035C14.6833 18.1192 16.2003 19.732 18.5419 19.732H18.5872C21.022 19.732 22.5359 18.1192 22.5359 16.1035C22.4896 14.0441 21.022 12.4766 18.6336 12.4766ZM15.0983 43.5921H22.0767V22.5968H15.0983V43.5921Z" fill="#F1F2F2"/>
</g>
<defs>
<clipPath id="clip0_667_474">
<rect width="58.4079" height="58.4079" fill="white" transform="translate(0.592041)"/>
</clipPath>
</defs>
</svg></a></li>
			</ul>
		
		</div>
		<div class="footer-base">
			<p>Digital Imaging FX, 210 Broadway, Media City, Salford, M50 2UE</p>
			<p>© Digital Imaging FX All rights reserved</p>
			<p>Privacy</p>
		</div>
		
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
