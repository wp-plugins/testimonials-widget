=== Testimonials Widget ===
Contributors: comprock
Donate link: http://aihr.us/about-aihrus/donate/
Tags: client, customer, quotations, quote, quotes, random, review, quote, recommendation, reference, testimonial, testimonials, testimony, widget, wpml
Requires at least: 3.4
Tested up to: 3.6.0
Stable tag: 2.8.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Testimonials Widget plugin allows you to display random or rotating portfolio, quotes, reviews, showcases, or text with images on your WordPress blog.


== Description ==
Testimonials Widget plugin allows you to display random or rotating portfolio, quotes, reviews, showcases, or text with images on your WordPress blog. You can insert Testimonials Widget content via shortcode, theme functions, or widgets with category and tag selections and having multiple display options such as random or specific ordering.

More than one Testimonials Widget section can be displayed at a time. Each Testimonials Widget separately pulls from the `testimonials-widget` custom post type. Additionally, with shortcodes and theme functions, you can display a short or long list or rotation of testimonials. Each Testimonal Widget has its own CSS identifier for custom styling.

Widgets display content sans `wpautop` formatting. This means no forced paragraph breaks unless the content specifically contains them. You can enable `wpautop` via the "Keep whitespace?" option.

Through categories and tagging, you can create organizational structures based upon products, projects and services via categories and then apply tagging for further classificaton. As an example, you might create a Portfolio category and then use tags to identify web, magazine, media, public, enterprise niches. You can then configure the Testimonial Widget to show only Portfolio testimonials with the public and enterprise tags. In another Testimonial Widget, you can also select only Portfolio testimonials, but then allow web and media tags.

Single testimonial view supports image, source, title, email, company and URL details.

= Primary Features =

* Admin interface to add, edit and manage testimonials
* Filters to manipulate testimonial layout and presentation
* Has fields for source, title, testimonial, email, company and URL details
* Multiple widgets on a single page capable
* Settings screen for site-wide option defaults
* Shortcodes and theme functions for listings and rotation
* Single testimonial view includes image, source, title, email, company and URL details
* Testimonials archive view – Disabled for now

= Testimonials Widget Premium Plugin Features =

Testimonials Widget Premium extends the Testimonials Widget plugin with additional selection options, caching, excerpts, shortcodes and more. [Purchase Testimonials Widget Premium](http://aihr.us/wordpress/testimonials-widget-premium/) plugin for WordPress. In using it, You'll not be sorry.

* Alternate destinations for "Read more" links
* Built-in update notification
* Caching of testimonials queries and content to decrease server load time improve page loading speed by 1/10 to 1/2 a second
* Deletes old and related testimonial cache entries automatically
* Disable caching for widget, shortcode or theme functions
* Ensure unique testimonial display per page
* Excerpts for widget view, with read more link to complete testimonial
* Filters for caching and more link control, text replacement, and more
* Prevent duplicate testimonials when using multiple testimonial instances
* Read more links for testimonials exceeding the character limit
* Select only testimonials with excerpts, images or of arbitrary maximum and minimum length
* Shortcodes and theme functions for testimonials count and testimonial link list
* Show excerpts with list and single views
* Testimonial list entries have alternating `.even` and `.odd` CSS classes for backgrounds and other styling
* WPML compatible

[Buy Testimonials Widget Premium](http://aihr.us/wordpress/testimonials-widget-premium/) plugin for WordPress.

= Additional Features =

* Auto-migration from pre-2.0.0 custom table to new custom post type
	* Company, URL and email details are attempted to be identified and placed properly
	* Public testimonials are saved as Published. Non-public, are marked as Private.
	* Ignores already imported
* Compatible with WordPress multi-site
* Content truncation to respect HTML tags
* Custom CSS in footer for HTML validation
* Custom text or HTML for bottom of widgets
* Customizeable testimonial data field `testimonial_extra`
* Editors and admins can edit testimonial publisher
* Image, Gravatar, category and tag enabled
* Localizable - see `languages/testimonials-widget.pot`
* Respects meta capabilities
* Rotation JavaScript in footer than body
* Scrolling testimonials for maximum height restricted widgets
* Supports [WP-PageNavi](http://wordpress.org/extend/plugins/wp-pagenavi/)
* Testimonial content and layout completely customizable via filters
* Testimonial content supports HTML
* Testimonial, email, and URL fields are clickable
	* The URL requires a protocol like `http://` or `https://`
* Testimonials Widget widget displays static and rotating testimonials 
* Testimonials support styling based upon CSS classes for category, tags and post id
* URLs can be opened in new windows
* Unique CSS class per widget
* WordPress Multilingual enabled [WPML](http://wpml.org/)

= Shortcodes =

* `[testimonialswidget_list]` - Listings with paging 
* `[testimonialswidget_widget]` - Rotating

= Shortcode and Widget Options =

* Widget Title
	* `title1 - default "Testimonials"
* Title Link - URL or Post ID to link widget title to
	* `title_link` - default none; title_link=123, title_link=http://example.com
* Category Filter - Comma separated category slug-names
	* `category` - default none; category=product or category="category-a, another-category"
* Character Limit - Number of characters to limit testimonial views to
	* `char_limit` - default none; char_limit=200
	* Widget - default 500
* Exclude IDs Filter - Comma separated IDs
	* `exclude` - default none; exclude=2 or exclude="2,4,6"
* Hide Company?
	* `hide_company` - default show; hide_company=true
* Hide Email?
	* `hide_email` - default show; hide_email=true
* Hide Gravatar Image?
	* `hide_gravatar` - default show; hide_gravatar=true
* Hide Image?
	* `hide_image` - default show; hide_image=true
* Hide "Testimonials Not Found"?
	* `hide_not_found` - default show; hide_not_found=true
* Hide Author/Source? - Don't display "Post Title" in cite
	* `hide_source` - default show; hide_source=true
* Hide Title?
	* `hide_title` - default show; hide_title=true
* Hide URL?
	* `hide_url` - default show; hide_url=true
* Include IDs Filter - Comma separated IDs
	* `ids` - default none; ids=2 or ids="2,4,6"
* Remove `.hentry` CSS? – Some themes use class `.hentry` in a manner that breaks Testimonials Widgets CSS
	* `remove_hentry` - default none; remove_hentry=true
* Keep Whitespace? - Keeps testimonials looking as entered than sans auto-formatting
	* `keep_whitespace` - default none; keep_whitespace=true
	* The citation has no whitespace adaptions. It's straight text, except for email or URL links. The presentation is handled strictly by CSS.
* Limit - Number of testimonials to rotate through via widget or show at a time when listing
	* `limit` - default 10; limit=25
* ORDER BY meta_key - Used when "Random Order" is disabled and sorting by a testimonials meta key is needed
	* `meta_key` - default none [testimonials-widget-company|testimonials-widget-email|testimonials-widget-title|testimonials-widget-url]; meta_key=testimonials-widget-company
* Minimum Height - Set for minimum display height, in pixels
	* `min_height` - default none; min_height=100
* Maximum Height - Set for maximum display height, in pixels
	* `max_height` - default none; max_height=250
* ORDER BY Order - DESC or ASC
	* `order` - [default DESC](http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters); order=ASC
* ORDER BY - Used when Random order is disabled
	* `orderby` - [default ID](http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters); orderby=title
* Enable Paging - for [testimonialswidget_list]
	* `paging` - default true [true|before|after|false]; paging=false
		* `true` – display paging before and after testimonial entries
		* `before` – display paging only before testimonial entries
		* `after` – display paging only after testimonial entries
	* Widget - Not functional
* Random Order? - Unchecking this will rotate testimonials per ORDER BY and ORDER BY Order. Widgets are random by default automatically
	* `random` - default none; random=true (overrides `order` and `orderby`)
	* Widget = default true
* Rotation speed - Seconds between testimonial rotations or 0 for no rotation at all
	* `refresh_interval` - default 5; refresh_interval=0
* Require All Tags - Select only testimonials with all of the given tags
	* `tags_all` - default OR; tags_all=true
* Tags Filter - Comma separated tag slug-names
	* `tags` - default none; tags=fire or tags="tag-a, another-tag"
* URL Target - Adds target to all URLs; leave blank if none
	* `target` - default none; target=_new
* Testimonial Bottom Text - Custom text or HTML for bottom of testimonials
	* `bottom_text` - default none; bottom_text="`<h3><a href="http://example.com">All testimonials</a></h3>`"

= Shortcode Examples =

* [testimonialswidget_list]
	* [testimonialswidget_list]
	* [testimonialswidget_list category=product hide_not_found=true]
	* [testimonialswidget_list category=product tags=widget limit=5]
	* [testimonialswidget_list char_limit=0 target=_new]
	* [testimonialswidget_list hide_source=true hide_url=true] 
	* [testimonialswidget_list ids="1,11,111"]
	* [testimonialswidget_list meta_key=testimonials-widget-company order=asc limit=15]
	* [testimonialswidget_list order=ASC orderby=title]
	* [testimonialswidget_list paging=true limit=25]
	* [testimonialswidget_list tags="test,fun" random=true exclude="2,22,333"]
* [testimonialswidget_widget]
	* [testimonialswidget_widget]
	* [testimonialswidget_widget category=product order=asc]
	* [testimonialswidget_widget min_height=250 max_height=500]
	* [testimonialswidget_widget tags=sometag random=true]

= Theme Functions =

* `testimonialswidget_list()` - Listings with paging 
* `testimonialswidget_widget()` - Rotating

= Filters =

* `testimonials_widget_cache_get` - Caching grabber
* `testimonials_widget_cache_set` - Caching setter
* `testimonials_widget_columns` - Customize testimonial posts column headers
* `testimonials_widget_content_more` - More content ellipsis
* `testimonials_widget_content` - Testimonial content parser helper
* `testimonials_widget_data` - Process testimonials data before display processing
* `testimonials_widget_defaults_single` - Create a global or central Testimonials Widget configuration for single view
* `testimonials_widget_defaults` - Create a global or central Testimonials Widget configuration
* `testimonials_widget_get_testimonial_html` - Customize testimonial contents and layout within `get_testimonial_html`. Useful for moving processed parts around than regenerating everything from scratch.
* `testimonials_widget_gravatar_size` - Change the Gravatar size
* `testimonials_widget_image_size` - Change the image size
* `testimonials_widget_meta_box` - Modify Testimonial Data fields
* `testimonials_widget_next_posts_link` - Configure Next page indicator
* `testimonials_widget_validate_settings` - Validate settings helper
* `testimonials_widget_posts_custom_column` - Customize testimonial posts column contents
* `testimonials_widget_previous_posts_link_text` - Configure Previous page indicator
* `testimonials_widget_query_args` - Alter WP_Query arguments for testimonial selection
* `testimonials_widget_testimonial_html_single_content` - Customize single view content before appending filter `testimonials_widget_testimonial_html_single` results
* `testimonials_widget_testimonial_html_single` - Customize testimonials single view output post `get_testimonial_html`
* `testimonials_widget_testimonial_html` - Customize testimonials list and widget output post `get_testimonial_html`
* `testimonials_widget_testimonials_css` - Alter dynamically generated CSS
* `testimonials_widget_testimonials_js` - Alter dynamically generated JavaScript
* `testimonials_widget_wp_pagenavi` - Configure WP-PageNavi specifically for Testimonial Widgets
* `testimonials_widget_sections` – Alter section options
* `testimonials_widget_settings` – Alter setting options

= Notes =

* Default image size is based upon Thumbnail size in Media Settings 
* Gravatar image is configured in the Avatar section of Discussion Settings

= Languages =

You can translate this plugin into your own language if it's not done so already. The localization file `testimonials-widget.pot` can be found in the `languages` folder of this plugin. After translation, please [send the localized file](http://aihr.us/contact-aihrus/) to the plugin author.

* [Hebrew by Ahrale](http://atar4u.com/)

= Recommendation =

* Use Jonathan Lundström's [Drag & Drop Featured Image](http://wordpress.org/extend/plugins/drag-drop-featured-image/) to speed up loading of the featured image

= Background & Thanks =

A big, special thank you to [Joe Weber](https://plus.google.com/100063271269277312276/posts) of [12 Star Creative](http://www.12starcreative.com/) for creating the Testimonials Widget banner. It's fantastic.

Version 2.0.0 of Testimonials Widget is a complete rewrite based upon a composite of ideas from user feedback and grokking the plugins [Imperfect Quotes](http://www.swarmstrategies.com/imperfect-quotes/), [IvyCat Ajax Testimonials](http://wordpress.org/extend/plugins/ivycat-ajax-testimonials/), [Quotes Collection](http://srinig.com/wordpress/plugins/quotes-collection/), and [TB Testimonials](http://travisballard.com/wordpress/tb-testimonials/). Thank you to these plugin developers for their efforts that have helped inspire this rewrite.

A cool thanks to RedRokk Library for the [redrokk_metabox_class](https://gist.github.com/1880770). It makes configuring metaboxes for your posts, pages or custom post types a snap.

Prior to version 2.0.0, this plugin was a fork of [Quotes Collection](http://srinig.com/wordpress/plugins/quotes-collection/) by [Srini G](http://wordpress.org/support/profile/SriniG) with additional contributions from [j0hnsmith](http://wordpress.org/support/profile/j0hnsmith), [ChrisCree](http://wordpress.org/support/profile/ChrisCree) and [comprock](http://wordpress.org/support/profile/comprock).

= Support =

So that others can share in the answer, please submit your support requests through the [WordPress forums for Testimonials Widget](http://wordpress.org/support/plugin/testimonials-widget).

If you want private or priority support, [please donate](http://aihr.us/about-aihrus/donate/) $ 125 USD to cover my time. Then send your [support request](http://aihr.us/contact-aihrus/).

Thank you for your understanding.


== Installation ==

1. Via WordPress Admin > Plugins > Add New, Upload the `testimonials-widget.zip` file
1. Alternately, via FTP, upload `testimonials-widget` directory to the `/wp-content/plugins/` directory
1. Activate the 'Testimonials Widget' plugin through WordPress Admin > Plugins

= Usage =
1. Add and manage the quotes through the 'Testimonials' menu in the WordPress admin area
1. To display testimonials in the sidebar, go to 'Widgets' menu and drag the 'Testimonials Widget' into the desired widget area
1. Configure the 'Testimonials Widget' to select quotes and display as needed
1. Alternately, use the `[testimonialswidget_list]` or `[testimonialswidget_widget]` shortcodes to display testimonials on a page or in a post
1. Alternately, read FAQ 1 for `testimonialswidget_list()` and `testimonialswidget_widget()` theme functions usage


== Frequently Asked Questions ==

= 1. How do I use the theme functions `testimonialswidget_list()` and `testimonialswidget_widget()`? =

In your theme's `functions.php` file, place code similar to the following for the configuration you need.

A basic testimonial list or widget with no options.
`
<?php echo testimonialswidget_list(); ?>
<?php echo testimonialswidget_widget(); ?>
`

Testimonial list or widget with options.
`
<?php

// The following argument configuration selects 5 testimonials of the "product" category, having the "widget" tag.
// $args is an optional array of desired shortcode options
$args							= array(
	'category'					=> 'product',
	'tags'						=> 'widget',
	'limit'						=> 5,
);

// Displays the testimonials as a list into your theme directly
echo testimonialswidget_list( $args );


// The following argument configuration selects testimonials of the "review" tag and sets a slower rotation speed for the display widget
$args							= array(
	'tags'						=> 'review',
	'refresh_interval'			=> 15,
);

// Displays the testimonials as a rotating widget into your theme directly
echo testimonialswidget_widget( $args );


// $widget_number is an optional, arbitrarily number (probably safe between 1,000 and 9,999) that helps create a uniquely identifiable testimonials widget display instance.
$widget_number					= 1234;
// Displays the testimonials as a rotating widget into your theme directly  with specific class .testimonialswidget_testimonials1234
echo testimonialswidget_widget( $args, $widget_number );

?>
`

In case of `Fatal error: Call to undefined function testimonialswidget_widget() in…`, please try including `testimonials-widget.php` like the following.

`
<?php 
include_once( WP_PLUGIN_DIR . '/testimonials-widget/testimonials-widget.php' );
echo testimonialswidget_widget(); 
?>
`

= 2. How do you include the actual testimonials for the widget? Where do I quote my customers? I mean, where do I enter the actual text? =

In WordPress Admin > Testimonials. See [screenshot 1](http://s.wordpress.org/extend/plugins/testimonials-widget/screenshot-1.png).

Basically, look down the left side of your WordPress admin area for the Testimonials section. Click on that section link, then click "Add new testimonial" at top to add quotes.

= 3. How do I filter the testimonials data before display processing? =

`
function my_testimonials_widget_data( $data ) {
	if ( empty( $data ) )
		return $data;

	foreach( $data as $key => $testimonial ) {
		// do something with the $testimonial entry
		// the keys below are those that are currently available
		// 'testimonial_extra' is the key in which you can put in your own custom content for display
		$testimonial			= array(
			'post_id'				=> …,
			'testimonial_source'	=> …,
			'testimonial_company'	=> …,
			'testimonial_content'	=> …,
			'testimonial_email'		=> …,
			'testimonial_image'		=> …,
			'testimonial_url'		=> …,
			'testimonial_extra'		=> …,
		);

		$data[ $key ]			= $testimonial;
	}

	return $data;
}

add_filter( 'testimonials_widget_data', 'my_testimonials_widget_data' );
`

Do note that content truncation might still remove your appended content if you're using `char_limit`.

Content of `testimonial_extra` is appended after the closing `cite` tag within the testimonial with CSS class `testimonialswidget_extra`.

= 4. How do I change the image size? =

The default image size is based upon Thumbnail size in Media Settings. If changing that doesn't work for you, then use `add_filter` in your theme's `functions.php` file to adjust the image size.

`
add_filter( 'testimonials_widget_image_size', 'my_testimonials_widget_image_size' );

function my_testimonials_widget_image_size( $size ) {
	$size						= array( 120, 90 );

	return $size;
}
`

You can use either a string keyword (thumbnail, medium, large or full) or a 2-item array representing width and height in pixels, e.g. array(32,32).

I recommend putting your theme customizations into a `custom-functions.php` file and then include that in your theme's `functions.php` file via `include 'custom-functions.php';`.

= 5. How do I change the Gravatar size? =

Use an `add_filter` in your theme's `functions.php` file to adjust the Gravatar size.

`
add_filter( 'testimonials_widget_gravatar_size', 'my_testimonials_widget_gravatar_size' );

function my_testimonials_widget_gravatar_size( $size ) {
	$size						= 120;

	return $size;
}
`

Default Gravatar size is 96, maximum 512.

= 6. What CSS applies to testimonials container? =

See FAQ 34/35 for more specific HTML layout and CSS presentation information.

CSS class `testimonialswidget_testimonials` wraps all testimonials. Additionally, shortcode lists are wrapped by `testimonialswidget_testimonials testimonialswidget_testimonials_list`.

= 7. What CSS applies to single testimonial container? =

See FAQ 34/35 for more specific HTML layout and CSS presentation information.

CSS class `testimonialswidget_testimonial` wraps a single testimonial. Additionally, single shortcode list tems are wrapped by `testimonialswidget_testimonial testimonialswidget_testimonial_list`.

= 8. How can I add the testimonials plugin to any where on the site? ie. somewhere other than the side bar like the contact page etc.? =

See the "Shortcode Examples", "Theme Function `testimonialswidget_list()`" and "Theme Function `testimonialswidget_widget()`" on http://wordpress.org/extend/plugins/testimonials-widget/.

= 9. How do I hide the comma after the source? =

Use CSS.

`
.testimonialswidget_testimonial .testimonialswidget_join_title {
.testimonialswidget_testimonial .testimonialswidget_join {
	display: none;
}
`

= 10. Testimonials widget is not showing or rotating =

The usual problem is that jQuery is included twice. Once by WordPress and again by a theme. Remove the jQuery version included by your theme and you should be fine.

= 11. I'm not seeing any testimonials but the title =

If you're not seeing any testimonials, even when not using tags filter, you might try increasing the Character limit or setting it to '0' or 'none' in the widget box.

= 12. How do I apply custom CSS to a specific testimonial widget? =

The easiest thing is to check the source code of your page with the widget and look for the testimonial widgets div container id tag. It'll be something like `id="testimonials_widget-3"`.

Then, in your theme's `custom.css` or `styles.css` file write CSS like the following.

`
#testimonials_widget-3 {
	color: red;
}

#testimonials_widget-3 cite {
	color: black;
}
`

= 13. How to get rid of the quotation marks that surround the random quote? =

In your theme's `custom.css` or `styles.css` file write the following CSS.

`
.testimonialswidget_testimonial .testimonialswidget_open_quote:before,
.testimonialswidget_testimonial .testimonialswidget_close_quote:after {
	display: none;
}
`

= 14. How to change the random quote text color? =

Styling such as text color, font size, background color, etc., of the random quote can be customized by editing your theme's `styles.css` file to apply CSS like the following.

`
.testimonialswidget_testimonial q {
	color: blue;
}
`

= 15. How can I style the shortcode testimonials? =

See FAQ 34/35 for more specific HTML layout and CSS presentation information.

Each shortcode testimonial is wrapped by a `div` using classes `testimonialswidget_testimonial testimonialswidget_testimonial_list`. As such, to increase spacing between testimonials, try…

`
.testimonialswidget_testimonial_list {
	padding-bottom: 1em;
}
`

Making the citation line a different color is a little trickier. The reason being is that applying a color to `.testimonialswidget_testimonial cite` will change the entire citation line in the widget display as well. To only change the shortcode testimonial citation color, try…

`
.testimonialswidget_testimonial_list cite {
	color: blue;
}
`

If you're wanting to change only the company or URL color, then try.

`
.testimonialswidget_testimonial_list cite .testimonialswidget_company {
	color: purple;
}
`

Like wise, the source uses class `testimonialswidget_source`.

= 16. How do I change the join ", " text? =

In CSS, revise the join content like the following.

`
.testimonialswidget_testimonial .testimonialswidget_join:before {
	content: " | "
}
`

= 17. Who can edit testimonials? =

All users can see and use the testimonials system. However, only users with `edit_others_posts` ability get to set author or edit other author's testimonials.

= 18. How do I put the title on a separate line? =

In CSS put the following.

`
.testimonialswidget_testimonial .testimonialswidget_join_title {
	display: none;
}

.testimonialswidget_testimonial .testimonialswidget_title {
	display: block;
}
`

= 19. How do I put company details on a separate line? =

In CSS put the following.

`
.testimonialswidget_testimonial .testimonialswidget_join {
	display: none;
}

.testimonialswidget_testimonial .testimonialswidget_company,
.testimonialswidget_testimonial .testimonialswidget_url {
	display: block;
}
`

= 20. After upgrading, testimonial rotations have stopped =

The JavaScript for rotating testimonials is moved to the footer. As such, your theme requires `wp_footer()` in the footer. Check to make sure your theme has the `<?php wp_footer(); ?>` call in footer.php or the equivalent file.

Alternately, enable Developer Mode in your browser, right-click on a testimonial, select "Inspect Element", and then click on the Console tab to review and resolve the JavaScript errors.

= 21. How can I justify testimonials text? =


To justify all testimonials try…
`
.testimonialswidget_testimonial {
	text-align: justify;
}
`
To justify only the testimonials list try…
`
.testimonialswidget_testimonial_list {
	text-align: justify;
}
`

= 22. Do testimonials have there own URL? =

Testimonial Widgets records are a custom post type and therefore can be viewed via a URL like http://www.example.com/testimonial/michael-cannon-senior-developer/.

When you look at the WP > Admin > Testimonials post list, you can click on the View link to see the testimonial in full.
	
The filters `testimonials_widget_testimonial_html_single` and `testimonials_widget_testimonial_html_single_content` are related to the single view.

Please purchase [Testimonials Widget Premium](http://aihr.us/wordpress/testimonials-widget-premium/) to get "Read more" link capability or use the filters to create your own.

= 23. My testimonial URL says "Page not found" or 404 =

Go to WordPress > Plugins to Deactivate and then Activate Testimonials Widget. The `flush_rewrite_rules` function needs to run.

If that still doesn't work, go to WordPress > Settings > Permalinks and click "Save Changes".

= 24. Does this plug in use admin-ajax.php to refresh? =

No, it doesn't call admin-ajax.php at all.

= 25. Is there a way to reorder testimonials? =

Look for ORDER BY under Advanced Options of the Testimonials Widget. In ORDER BY, put post_date. Then you use dates to put your testimonials into the order you want.

Alternately, use the `orderby` shortcode option.

= 26. How do I create a next link? =

Either purchase [Testimonials Widget Premium](http://aihr.us/wordpress/testimonials-widget-premium/) or see http://wordpress.org/support/topic/plugin-testimonials-widget-next-testimonial-not-pagination for tips.

= 27. How do I hide the "No testimonials found" text? =

In Widget options, check "Hide testimonials not found?" or in shortcode options use `hide_not_found=true`.

`[testimonialswidget_list hide_not_found=true]`

= 28. How do I export testimonials? =


Use the WordPress Admin > Tools > Export option to do so. Besure to select 'All content' or 'Testimonials'.

= 29. How do I import testimonials from WordPress export? =


Go WordPress Admin > Tools > Import > WordPress, install and activate that WordPress importer. Then repeat the WordPress Admin > Tools > Import > WordPress sequence to actually import up your export.

= 30. What's one way to programmatically query testimonials on a page without using shortcodes or widgets? =


`
<?php
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$args = array( 'paged' => $paged, 'posts_per_page' => 10, 'orderby' => DESC, 'post_type' => Testimonials_Widget::pt );
// The Query
query_posts( $args );
// The Loop
while ( have_posts() ) : the_post();
// do your thing…
endwhile;
?>
`

Cheers to [tcwebguru](http://wordpress.org/support/topic/display-on-page-without-widget) for this suggestion.

= 31. How do I change Testimonials Widget text labels? =

1. The default `WPLANG` is `en_US`.
	* Use `en_US.mo` and `en_US.po` as the filenames of your localization changes if you're sticking with US English.
	* `de_DE` – German
	* `en_UK` – UK English
	* `es_ES` – Spanish
	* `fr_FR` – French
	* `ja_JP.EUC-JP.mo` – Japanese in EUC-JP encoding
	* `zh-TW` – Traditional Chinese
	* `zh_CN` – Simplified Chinese
1. Create localized `YOUR_WPLANG.mo` and `YOUR_WPLANG.po` files from `languages/testimonials-widget.pot`.
	* See [Translation Tools](http://codex.wordpress.org/Translating_WordPress#Translation_Tools) of [Translating WordPress](http://codex.wordpress.org/Translating_WordPress) for help.
	* Ensure that `YOUR_WPLANG.mo` and `YOUR_WPLANG.po` files contain the correct `Language:` tag like `Language: es_ES` and `"Language: es_ES\n"` respectively.
	* Example: See screenshot 21. "Poedit Catalog properties"
1. Create a directory named `languages` inside of `wp-content`.
1. Put your `YOUR_WPLANG.mo` and `YOUR_WPLANG.po` files into your `wp-content/languages` directory.
1. Set `WPLANG` in `wp-config.php` to your chosen language.
	* See [Using Localizations](http://codex.wordpress.org/Translating_WordPress#Using_Localizations) of [Translating WordPress](http://codex.wordpress.org/Translating_WordPress) for help.  
	* Ex: `<?php define('WPLANG', 'de_DE'); ?>`

*Sometimes the above doesn't work, so…*

1. Create localized `testimonials-widget-YOUR_WPLANG.mo` and `testimonials-widget-YOUR_WPLANG.po` files from `languages/testimonials-widget.pot`.
1. Put your localized `testimonials-widget-YOUR_WPLANG.mo` and `testimonials-widget-YOUR_WPLANG.po` files into directory `wp-content/plugins/testimonials-widget/languages/`.
1. Set `WPLANG` in `wp-config.php` to your chosen language.

When done translating, please [send your translation](http://aihr.us/contact-aihrus/) for inclusion with the Testimonials Widget plugin release.

Check out [Translating WordPress Plugins & Themes](http://urbangiraffe.com/articles/translating-wordpress-themes-and-plugins/) for fuller explanations.

= 32. How do I prevent testimonials in my footer from changing the page height? =


Use the shortcode `max-height` or widget "Maximum Height" option to keep the testimonial widget height consistent.

= 33. How do I change the more content ellipsis? =

In your theme's `functions.php` file, add similar code as follows.
`
add_filter( 'testimonials_widget_content_more', function() { return ' Continue reading &rarr;'; } );
`
or
`
function my_content_more() {
	return ' Continue reading &rarr;';
}

add_filter( 'testimonials_widget_content_more', 'my_content_more' );
`

= 34. How is an active testimonial widget formatted with CSS? =

`
<!-- testimonials outer wrapper begin -->
<!-- The NNN of testimonialswidget_testimonialsNNN represents the widget number for specific widget styling -->
<div class="testimonialswidget_testimonials testimonialswidget_testimonialsNNN">
	<!-- individual testimonial wrapper begin -->
	<div class="post-NNN testimonials-widget type-testimonials-widget status-publish hentry category-slug_name tag-slug_name testimonialswidget_testimonial testimonialswidget_active">
		<span class="testimonialswidget_image">
			<img width="150" height="150" src="http://example.com/example.jpg" class="attachment-thumbnail wp-post-image" alt="Example" title="Example">
		</span>
		<q>
			<span class="testimonialswidget_open_quote"></span>Testimonial AKA post content<span class="testimonialswidget_close_quote"></span>
		</q>
		<cite>
			<span class="testimonialswidget_author">
				<a href="mailto:email@example.com">Source AKA post title</a>
			</span>
			<span class="testimonialswidget_join_title"></span>
			<span class="testimonialswidget_title">Title</span>
			<span class="testimonialswidget_join"></span>
			<span class="testimonialswidget_company">
				<a href="http://example.com">Company, LLC</a>
			</span>
		</cite>
		<div class="testimonialswidget_extra">Custom extra text</div>
		<div class="testimonialswidget_bottom_text">Custom widget text</div>
	</div>
	<!-- individual testimonial wrapper end -->
</div>
<!-- testimonials outer wrapper end -->
`

Please view the `testimonials-widget.css` file for CSS customizations.

See FAQ 61 for NNN identification.

= 35. How is a testimonial list formatted with CSS? =

`
<!-- testimonials outer wrapper begin -->
<div class="testimonialswidget_testimonials testimonialswidget_testimonials_list">
	<!-- individual testimonial wrapper begin -->
	<div class="post-NNN testimonials-widget type-testimonials-widget status-publish hentry category-slug_name tag-slug_name testimonialswidget_testimonial testimonialswidget_testimonial_list">
		<span class="testimonialswidget_image">
			<img width="150" height="150" src="http://example.com/example.jpg" class="attachment-thumbnail wp-post-image" alt="Example" title="Example">
		</span>
		<q>
			<span class="testimonialswidget_open_quote"></span>Testimonial AKA post content<span class="testimonialswidget_close_quote"></span>
		</q>
		<cite>
			<span class="testimonialswidget_author">
				<a href="mailto:email@example.com">Source AKA post title</a>
			</span>
			<span class="testimonialswidget_join_title"></span>
			<span class="testimonialswidget_title">Title</span>
			<span class="testimonialswidget_join"></span>
			<span class="testimonialswidget_company">
				<a href="http://example.com">Company, LLC</a>
			</span>
		</cite>
		<div class="testimonialswidget_extra">Custom extra text</div>
		<div class="testimonialswidget_bottom_text">Custom widget text</div>
	</div>
	<!-- individual testimonial wrapper end -->
</div>
<!-- testimonials outer wrapper end -->
`

Please view the `testimonials-widget.css` file for CSS customizations.

See FAQ 61 for NNN identification.

= 36. How do I configure Next and Previous page indicators? =

For previous page links, in your theme's `functions.php` file, add similar code as follows.
`
add_filter( 'testimonials_widget_previous_posts_link_text', function() { return 'Previous'; } );
`
or
`
function my_testimonials_widget_previous_posts_link_text() {
	return 'Previous';
}

add_filter( 'testimonials_widget_previous_posts_link_text', 'my_testimonials_widget_previous_posts_link_text' );
`

For next page links, use `testimonials_widget_next_posts_link` instead of `testimonials_widget_previous_posts_link_text` in above.

= 37. Why should I purchase the Testimonials Widget Premium? =

Simply said, to demonstrate on-going support for the development of Testimonials Widget.

Further, you and other developers are very welcome to code your own version of [Testimonials Widget Premium](http://aihr.us/wordpress/testimonials-widget-premium/) plugin's caching and 'read more' link capabilities without purchase. Since version 2.3.0, the free Testimonials Widget plugin provides several new filters or hooks which provides for easily incorporating the premium features.

It was a hard choice making the 'Read more' link feature a premium option. I knew that there were going to be people not happy with me for doing so. However, I feel that asking for you to purchase [Testimonials Widget Premium](http://aihr.us/wordpress/testimonials-widget-premium/) is an acceptable request to help pay for the free, quick support and development like Testimonials Widget's [17 high-level changes](http://plugins.trac.wordpress.org/changeset?reponame=&old=627496%40testimonials-widget&new=628068%40testimonials-widget) to go from version 2.2.9 to 2.3.0.

= 38. How do I use filter `testimonials_widget_defaults`? =

To create a global or central Testimonials Widget configuration, in your theme's `functions.php` file, add similar code as follows.

`
function my_testimonials_widget_defaults( $array ) {
	$array['category']			= 'testimony';
	$array['char_limit']		= 250;
	$array['paging']			= 'true';
	$array['refresh_interval']	= 10;

	return $array;
}

add_filter( 'testimonials_widget_defaults', 'my_testimonials_widget_defaults' );
`

= 39. How do I style the custom widget text? =

In your theme's `styles.css` file use the CSS class `.testimonialswidget_bottom_text` to style the custom widget text.

= 40. How do I get page numbers for pagination? =

Install and activate [WP-PageNavi](http://wordpress.org/extend/plugins/wp-pagenavi/) to get page numbers for pagination of testimonials via the shortcode `[testimonialswidget_list]`.

Additionally, you can use filter `testimonials_widget_wp_pagenavi` to configure WP-PageNavi specifically for Testimonial Widgets. Read WP-PageNavi's [core.php](http://plugins.svn.wordpress.org/wp-pagenavi/trunk/core.php) `wp_pagenavi` function declaration for available options.

= 41. How do I make my widget height consistent and not overlapping? =

In short, set `min-height` and `max-height` options to be the same.

Why? Because testimonial lengths differ and there might be an image or not, the normal CSS `height` property fails for our dynamic rotations.

= 42. How do I exclude testimonial categories from Category widget? =

Add the following to your theme's `functions.php` file:

`
function exclude_widget_categories( $args ) {
	// Make sure to replace the category IDs 8,10 with yours.
	$exclude					= '8,10';
	$args['exclude']			= $exclude;
	return $args;
}
add_filter( 'widget_categories_args', 'exclude_widget_categories' );
`

Thank you [katiewp](http://wordpress.org/support/topic/plugin-testimonials-widget-categories-tags-best-practices?replies=7#post-3460607) for the answer.

= 43. How do I exclude testimonial categories from my sitemap? =

Change the following in your theme's `functions.php` or `sitemap.php` file:

Before:
`
<?php wp_list_categories('sort_column=name&optioncount=1&hierarchical=0&title_li='); ?>
`

After:
`
<?php wp_list_categories('sort_column=name&optioncount=1&hierarchical=0&title_li=&exclude=8,10'); ?>
`

Make sure to replace the category IDs 8,10 with yours.

Thank you [katiewp](http://wordpress.org/support/topic/plugin-testimonials-widget-categories-tags-best-practices?replies=7#post-3460607) for the answer.

= 44. Can I change how quickly the testimonials change? =

Yes. Look for the "Rotation Speed" on the widget options panel or use the `refresh_interval` option in shortcode to adjust the number of seconds between testimonial rotations.

= 45. Why don't I see all of my testimonial? =

The widget option by default has a 500 character limit. To view more characters, increase the limit or set it to 0. See bottom of [screenshot 3](http://s.wordpress.org/extend/plugins/testimonials-widget/screenshot-3.png). 

= 46. How do you order testimonials by given IDs? =

To display the testimonials with IDs 538, 451, 442, 449, and 565 in that same order; you need to use the `ids` and `orderby` shortcode or widget options.

`
[testimonialswidget_list ids="538,451,442,449,565" orderby=none]
`

Thank you [Ionrot](http://wordpress.org/support/topic/order-by-id-list?replies=5#post-3517737) for inspiring this FAQ and code feature.

= 47. How to make a testimonials listing in a widget than a rotating testimonial? =

First, you'll need to enable shortcodes in widget by adding `add_filter('widget_text', 'do_shortcode');` to the bottom of your themes `functions.php` file, before the closing `?>`.

Then for the testimonials listing in a widget, use a Text widget with a shortcode like `[testimonialswidget_list limit=5]`.

If you have formatting issues, you can check out [Enabling shortcodes in widgets, quick WordPress tip.](http://dannyvankooten.com/630/enabling-shortcodes-in-widgets-quick-wordpress-tip/) for further help.

Thank you [davidnjacoby](http://wordpress.org/support/topic/make-testimonials-widget-a-list-not-rotating-individual-testimonials?replies=2#post-3548911) for recommending this FAQ.

= 48. How do I customize my testimonial list and widget output? =

If you want to change the layout of the testimonials, then you can use the `testimonials_widget_testimonial_html` filter. This filter follows the `get_testimonials_html` method which is how the testimonial HTML is normally generated. The `testimonials_widget_testimonial_html` filter works for widgets and lists.

`
add_filter( 'testimonials_widget_testimonial_html', 'my_testimonials_widget_testimonial_html', 10, 5 );

function my_testimonials_widget_testimonial_html( $content, $testimonial, $atts, $is_list = true, $is_first = false, $widget_number = null ) {
	// do stuff… see Testimonials_Widget::get_testimonial_html for default processing
	return $content;
}
`

= 49. How do I customize my testimonial single output? =

See FAQ 48 for more details.

`
add_filter( 'testimonials_widget_testimonial_html_single', 'my_testimonials_widget_testimonial_html_single', 10, 3 );

function my_testimonials_widget_testimonial_html_single( $content, $testimonial, $atts ) {
	// do stuff… see Testimonials_Widget::get_testimonials_html for default processing
	return $content;
}
`

= 50. Example to set widget gradient background color =

See FAQ 61 for NNN identification. Then write CSS like the following change the color behind the widget to a light gradient gold.

`
.testimonialswidget_testimonials3 {
	background-image: linear-gradient(to bottom right, #FFEF87 0%, #EFEFEF 100%);
}
`

A special thanks to [inode86](http://wordpress.org/support/topic/gradient-background-color?replies=2) for this suggestion.

= 51. How do I use filter `testimonials_widget_get_testimonial_html`? =

Also see FAQ 48.

`
add_filter( 'testimonials_widget_get_testimonial_html', 'my_testimonials_widget_get_testimonial_html', 10, 13 );

function my_testimonials_widget_get_testimonial_html( $html, $testimonial, $atts, $is_list, $is_first, $widget_number, $div_open, $image, $quote, $cite, $extra, $bottom_text, $div_close ) {
	// do stuff… see Testimonials_Widget::get_testimonials_html for default processing
	if ( is_page( 437 ) ) {
		$source					= '';
		if ( ! empty( $testimonial['testimonial_source'] ) )
			$source				= '<h3>' . $testimonial['testimonial_source'] . '</h3>';

		$html					= $div_open
			. $source
			. $image
			. $quote
			// . $cite
			// . $extra
			// . $bottom_text
			. $div_close;
		return $html;
	} elseif ( false && $is_list ) {
		return '<li>' . $image . $testimonial['testimonial_title'] . '</li>';
	} else {
		return $html;
	}
}
`

Thank you to [Georgia Gibbs Design](http://georgia-gibbs.com/) for suggesting this capability.

= 52. How do I include testimonies in my archive view? =
In your theme's `functions.php` file, place code similar to the following for the configuration you need.

`
add_filter( 'pre_get_posts', 'pre_get_posts_allow_testimonials' );
function pre_get_posts_allow_testimonials( $query ) {
	if ( $query->is_admin ) {
		return $query;
	} elseif ( ( $query->is_main_query() || is_feed() )
		&& ! is_page()
		&& ( ( ! empty( $query->query_vars['post_type'] ) && 'post' == $query->query_vars['post_type'] )
			|| is_archive() )
	) {
		$query->set( 'post_type', array( 'post', Testimonials_Widget::pt ) );
	}

	return $query;
}
`

= 53. How do I scroll my widget based testimonial content? =

See FAQ 61 for NNN identification. Then in your theme's `styles.css` file add CSS like the following.

`
.testimonialswidget_testimonialsNNN {
	overflow: auto;
}
`

= 54. Why is that there is an update like every other day? =

I believe as Eric S. Raymond, author of "The Cathedral and the Bazaar" wrote

> Release early. Release often. And listen to your customers.

Through 20 years of software development experience, I've found that Wikipedia's definition and reasoning for frequent releases is true.

> Release early, release often is a software development philosophy that emphasizes the importance of early and frequent releases in creating a tight feedback loop between developers and testers or users, contrary to a feature-based release strategy. Advocates argue that this allows the software development to progress faster, enables the user to help define what the software will become, better conforms to the users' requirements for the software, and ultimately results in higher quality software.

References

* [Release Early, Release Often](http://haacked.com/archive/2011/04/20/release-early-and-often.aspx)
* [Rules for Entrepreneurs: Release Early and Often](http://technosailor.com/2011/09/28/rules-for-entrepreneurs-release-early-and-often/)
* [Wikipedia](http://en.wikipedia.org/wiki/Release_early,_release_often)

Thank you [gingalley](http://wordpress.org/support/profile/gingalley) for the explanation request.

= 55. How do I style about page testimonials while leaving other testimonials alone or vice versa? =
To style a page's testimonials or a particular testimonial widget instance, you need to style it with a page or testimonial wrapper class. Each page and testimonial has `body` or `div` class tags to support such.

See FAQ 61 for NNN identification. Then in your theme's `styles.css` file add CSS like the following.

`
.testimonialswidget_testimonialsNNN .testimonialswidget_testimonial {
	…
}
`

To style for a particular page, we use that page's CSS class. As an example, [Aihrus' about page](http://aihr.us/about-aihrus/), has the `body` tag `<body class="custom about-aihrus single-page content-sidebar default">`. Therefore, I would do something like the following to style my testimonials.

`
.about-aihrus .testimonialswidget_testimonial {
	…
}
`

= 56. What's the testimonials archive view URL? =

**Disabled for now**

It's your URL with `/testimonials/` appended. Like `http://example.com/testimonials/`.

= 57. What's the testimonial single view URL? =

It's your URL with `/testimonial/post-title-slug/` appended. Like `http://example.com/testimonials/your-work-is-awesome/`.

= 58. How do you specify testimonials per page or section? =

Please view [Make Specific testimonial appear in only one page](http://wordpress.org/support/topic/make-specific-testimonial-appear-in-only-one-page).

= 59. Why does my rotating widget show all testimonials than only one at a time? =

Please view [Widget Displaying Whole List Of Testimonials](http://wordpress.org/support/topic/widget-displaying-whole-list-of-testimonials).

= 60. How do I download older versions of Testimonials Widget? =

You can browse code and download current and other versions of Testimonials Widget via its [Developers](http://wordpress.org/extend/plugins/testimonials-widget/developers/) page.

= 61. What's NNN of ".testimonialswidget_testimonialsNNN"? =

As the CSS class `.testimonialswidget_testimonialsNNN` is dynamically generated, you're not going to find it in the Testimonials Widget CSS file. The reason being is that each Testimonials Widget instance is unique so that many can be used and styled on a page.

You may find your NNN value by looking at…
* "CSS class" from your widget's option panel - screenshot 3
* Your webpage's HTML source code for the unique testimonial widget class identifier
	* Ex: `<div class="testimonialswidget_testimonials testimonialswidget_testimonials20">` means you use CSS class `.testimonialswidget_testimonials20`

*When writing testimonials CSS, don't forget to change `NNN` to the number found above*

= 62. Why do I get "No testimonials found" when using category and tags? =

Because, there's no testimonials having that category with those tags.

When using tags only, it's possible to select from many testimonials unless you check the "Require all tags" option. Then only testimonials with all of those tags are selected.

= 63. How do I remove the cite –? =

In your theme's `custom.css` or `styles.css` file write the following CSS.

.testimonialswidget_testimonial cite::before {
	display: none;
}

= 64. What plugins potentially conflict with Testimonials Widget? =

* JetPack shortcodes
* FancyBox for WordPress

= 65. How do I disable the stylesheet? =

In your theme's `functions.php` file, add the following.

`
add_action( 'init', 'my_init' );

function my_init() {
	wp_dequeue_style( 'testimonials-widget' );
}
`

Thank you [sazanetti](http://wordpress.org/support/topic/css-tweaks?replies=4#post-3893996) for the suggestion.


= I'm still stuck, how can I get help? =
Visit the [support forum](http://wordpress.org/support/plugin/testimonials-widget) and ask your question.


== Screenshots ==

1. Testimonials admin interface
2. Edit testimonial with "Excerpt" and "Read More Link" fields - [Testimonials Widget Premium plugin](http://aihr.us/wordpress/testimonials-widget-premium/)
3. Collasped Testimonials Widget options
4. Expanded 'General Options' in Testimonials Widget options
5. Testimonial widget in the sidebar 
6. [testimonialswidget_list] in post
7. [testimonialswidget_list] results with paging
8. Widget whitespace kept
9. `require_image`, `minimum_length` and `maximum_length` shortcode option examples - [Testimonials Widget Premium plugin](http://aihr.us/wordpress/testimonials-widget-premium/)
10. Widget with "Read more" and "Next testimonial…" links - [Testimonials Widget Premium plugin](http://aihr.us/wordpress/testimonials-widget-premium/)
11. Widget with Premium Options - [Testimonials Widget Premium plugin](http://aihr.us/wordpress/testimonials-widget-premium/)
12. Single view with and without excerpt - Excerpt is feature of [Testimonials Widget Premium plugin](http://aihr.us/wordpress/testimonials-widget-premium/)
13. Widget with clickable title and custom text/HTML on bottom
14. [WP-PageNavi compatible](http://wordpress.org/extend/plugins/wp-pagenavi/) for page numbers than default arrows
15. `[testimonialswidgetpremium_link_list]` Shortcode examples, unstyled - [Testimonials Widget Premium plugin](http://aihr.us/wordpress/testimonials-widget-premium/)
16. Testimonials Widget Settings > Premium tab - [Testimonials Widget Premium plugin](http://aihr.us/wordpress/testimonials-widget-premium/)
17. Single `[testimonialswidget_list]` entry with and without 'Read more' link - [Testimonials Widget Premium plugin](http://aihr.us/wordpress/testimonials-widget-premium/)
18. `[testimonialswidgetpremium_count]` Examples - [Testimonials Widget Premium plugin](http://aihr.us/wordpress/testimonials-widget-premium/)
19. `[testimonialswidget_widget unique=true]` Show multiple testimonials in rotation - [Testimonials Widget Premium plugin](http://aihr.us/wordpress/testimonials-widget-premium/)
20. Alternating background colors – Courtesy of [placeofstillness](http://www.heartattune.com/clients-say/) - [Testimonials Widget Premium plugin](http://aihr.us/wordpress/testimonials-widget-premium/)
21. Poedit Catalog properties
22. Testimonials Widget Settings > General tab
23. Expanded 'Selection Options' in Testimonials Widget options
24. Expanded 'Ordering Options' in Testimonials Widget options
25. Testimonials Widget Settings > Selection tab


== Changelog ==
= trunk =

= 2.8.0 =
* Merge in settings branch
* Add `tw_get_options`
* Add filter `testimonials_widget_sections` – Alter section options
* Add filter `testimonials_widget_settings` – Alter setting options
* Add settings page 'Selection', 'Ordering', and 'Widget' tabs
* BUG with "Post Types Order"
* BUGFIX paging when not in singular view
* Configure settings within Testimonials_Widget_Settings class
* Enable 'Expand/Collapse' view in Widget options
* FAQ 65 Disable the stylesheet
* FEATURE Remove `.hentry` CSS?
* FEATURE Testimonials Widget Settings screen
* Removed filters `testimonials_widget_options_update`, `testimonials_widget_options_form`
* Rename `widget_text` to `bottom_text`
* Revise About page content
* Revise Settings page footer
* Revise widget options update and validation
* Screenshot 11 updated
* Screenshot 16 updated
* Screenshot 2 updated
* Screenshot 22 Testimonials Widget Settings > General tab
* Screenshot 23 Expanded 'Selection Options' Testimonials Widget 
* Screenshot 24 Expanded 'Ordering Options' Testimonials Widget 
* Screenshot 25 Testimonials Widget Settings > Selection tab
* Screenshot 3 updated
* Screenshot 4 updated, Expanded 'General Options' Testimonials Widget 
* Update "Shortcode and Widget Options" verbiage
* Update POT file
* Use defaults via Testimonials_Widget_Settings class
* Validate shortcode and widget options via Testimonials_Widget_Settings::validate_settings
* Verbiage updates

= 2.7.17 =
* Add purchase Testimonials Widget Premium plugin meta link
* Begin settings screen work
* FAQ 20 Update
* FAQ 31 Update
* FAQ 63 Remove the cite –
* FAQ 64 Plugin conflict
* Screenshot 21 Poedit Catalog properties
* TODO class removal
* Update localization verbiage

= 2.7.16 =
* Add comments panel to edit screen - [Thank you BarrieSpence](http://wordpress.org/support/topic/disable-comments-10?replies=1)
* TODO Admin panel

= 2.7.15 =
* Add "CSS class" to widget options window
* FAQ 31/34/35/50/53/55 updates
* FAQ 61 Determine .testimonialswidget_testimonialsNNN
* FAQ 62 Category and tag selection
* Feature updates
* Localization, Hebrew
* Screenshot 3 updated

= 2.7.14 =
* BUGFIX [Testimonials archive view URL conflicts with Page slug](http://wordpress.org/support/topic/testimonials-archive-view-url-conflicts-with-page-slug)
* FAQ 1 Update - Thank you [aaaronscat](http://wordpress.org/support/topic/writing-php-to-display-rotating-widget-in-a-template) for the inspiration
* FAQ 60 Download older versions of Testimonials Widget
* Premium feature update
* Screenshot 20 added

= 2.7.13 =
* Adapt for `mb_strcut` and `mb_strlen` alternatives
* BUGFIX [Widget doesn't appear](http://wordpress.org/support/topic/widget-doesnt-appear-1)
* Update POT

= 2.7.12 =
* Change Aihrus support email to contact form
* FAQ 1 Update - Thank you [aaaronscat](http://wordpress.org/support/topic/writing-php-to-display-rotating-widget-in-a-template) for the inspiration
* Update Testimonials Widget Premium URL

= 2.7.11 =
* Citation styling note
* Removed sub-category shortcode example
* Thanks to Joe Weber for asset header
* Update premium URL
* Update premium features
* Update premium purchase URL

= 2.7.10 =
* BUGFIX extra excerpt in single view
* Screenshot 11 updated
* Update premium features

= 2.7.9 =
* Revise content truncation to respect HTML tags
* Update premium description
* Update premium features

= 2.7.8 =
* Add `before` and `after` options to `paging`
* FAQ 58 Specify testimonials per page or section
* FAQ 59 Rotating widget show all testimonials than only one at a time
* Revert on-demand CSS to always included
* Support process and donation update
* Thank you to [mkearns](http://wordpress.org/support/topic/just-excellent-3) for specifying a sub-category shortcode example
* Update premium URL
* Update premium features

= 2.7.7 =
* FAQ 13 Update
* FAQ 31 Update
* Shortcode examples "[[" to "["

= 2.7.6 =
* Add `[testimonialswidget_widget]` to Shortcodes column
* CSS cite `margin-top` adjustment
* Enable testimonials archive view
* FAQ 1 Update
* FAQ 52 Update
* FAQ 53 Update
* FAQ 55 Style page and instance testimonials 
* FAQ 56 Testimonials archive view URL
* FAQ 57 Testimonial single view URL
* Only include CSS if testimonials instance called
* Screenshot 19 `[testimonialswidget_widget unique=true]` Show multiple testimonials in rotation
* Set arg defaults via `defaults`

= 2.7.5 =
* BUGFIX PHP Warning for new fields in widget when widget already exists
* Exclude IDs option
* Implement instance tracking
* Protect shortcode examples
* Update asset header size
* Update premium features

= 2.7.4 =
* Asset header help request
* Premium feature updates
* Screenshot 9 updated
* Screenshot 10 replaced
* Screenshot 11 updated
* Screenshot 15 updated
* Screenshot 17 Single `[testimonialswidget_list]` entry with and without 'Read more' link
* Screenshot 18 `[testimonialswidgetpremium_count]` Examples

= 2.7.3 =
* Apply quotes only around testimonial content
* FAQ 13 update
* FAQ 34 update
* FAQ 35 update
* Screenshot 8 replaced
* Simplified quotes handling
* Upgrade notification

= 2.7.2 =
* FAQ 54 update
* Screenshot 12 update
* Screenshot 16 Edit testimonial with "Excerpt" and "Read More Link" fields - Testimonials Widget Premium plugin

= 2.7.1 =
* Description update
* FAQ 1 update
* FAQ 2 update
* FAQ 4 update
* FAQ 5 update
* FAQ 6 update
* FAQ 7 update
* FAQ 8 update
* FAQ 9 update
* FAQ 12 update
* FAQ 14 update
* FAQ 15 update
* FAQ 17 update
* FAQ 22 update
* FAQ 25 update
* FAQ 26 update
* FAQ 30 update
* FAQ 32 update
* FAQ 34 update
* FAQ 35 update
* FAQ 37 update
* FAQ 53 update
* Feature update
* Installation update
* Screenshot 1 update
* Screenshot 2 update
* Screenshot 3 update
* Screenshot 4 update
* Screenshot 5 update
* Screenshot 6 update
* Screenshot 7 update
* Screenshot 8 replaced
* Screenshot 9 replaced
* Screenshot 12 update
* Screenshot 15 update
* Screenshot 16 removed
* Screenshot 17 removed
* Screenshot 18 removed

= 2.7.0 =
* FAQ 13 Update
* FAQ 54 Release early. Release often.
* Redo content opening and closing quotes display
* Upgrade notification for 2.7.0

= 2.6.6 =
* Remove CSS `overflow: auto` - too many complaints
* FAQ 53 Scroll widget based testimonial content

= 2.6.5 =
* BUGFIX: overflow auto than scroll
* Correct screenshot 11 & 18

= 2.6.4 =
* Add filters `testimonials_widget_posts_custom_column`, `testimonials_widget_columns`, `testimonials_widget_meta_box`
* BUGFIX Testimonial posts page column URL now correctly clickable
* Code spacing cleanup
* Enabled [scrolling text](http://wordpress.org/support/topic/plugin-testimonials-widget-scroll-for-a-single-but-long-testimonial) for maximum height restricted testimonial widgets
* FAQ 34/35 CSS styling update
* Scrolling testimonials for maximum height restricted widgets
* Testimonials have `get_post_class` applied 
* Update premium features

= 2.6.3 =
* Add filter `testimonials_widget_query_args`
* Add filters `testimonials_widget_testimonials_css`, `testimonials_widget_testimonials_js`
* Allow `limit=-1`
* BUGFIX Repeated footer CSS and JavaScript
* CSS - block disply widget image
* FAQ 52 Include testimonies in archive view
* Refactor `get_query_args` out of `get_testimonials`
* Revise JavaScript handling
* Screenshot 17 `require_image`, `minimum_length` and `maximum_length` shortcode option examples
* Screenshot 18 Widget with 'Next testimonial…' link
* Update POT
* Update premium features
* Update premium screenshots

= 2.6.2 =
* Compatible with WordPress 3.6
* Fix single view PHP warning

= 2.6.1 =
* Add filter `testimonials_widget_testimonial_html_single_content`
* Add `force_pad` option to `testimonials_truncate`
* Copyright year update
* Update Premium features

= 2.6.0 =
* Add FAQ 51 filter `testimonials_widget_get_testimonial_html` usage
* FAQ 50 Revise
* Reorganize `get_testimonial_html`

= 2.5.6 =
* Add FAQ 50 Example to set widget gradient background color
* FAQ 13 Update
* FAQ 20 Add PHP tags
* FAQ 48 Code correction
* FAQ 49 Code correction

= 2.5.5 =
* Enable widget caching
* Refactor `get_testimonials_html` to break out CSS/JS generation
* Respect [meta capabilities](http://wordpress.org/support/topic/plugin-testimonials-widget-version-20-rewrite-suggestions-request?replies=18#post-3359157)
* Revise TODO text
* TODO remove Template engine - see `testimonials_widget_testimonial_html*` filters

= 2.5.4 =
* Add filter `testimonials_widget_testimonial_html_single`
* Add filter `testimonials_widget_testimonial_html`
* Aihrus testimonial URL correction
* FAQ 34 Find `testimonialswidget_testimonialsNNN` instance naming
* FAQ 48 Customize testimonial list/widget output
* FAQ 49 Customize testimonial single output

= 2.5.3 =
* Add donate link in plugin section
* Donate links

= 2.5.2 =
* Aihrus branding

= 2.5.1 =
* Update POT file

= 2.5.0 =
* Add option Keep whitespace? - Thank you [kangchenjunga](http://wordpress.org/support/topic/optional-wpautop-functionality-for-better-formatting?replies=2) for the suggestion
* Revise FAQ 47
* Screenshot 16 - Widget whitespace kept
* Update Author URL

= 2.4.8 =
* Donate to purchase verbiage change - One bad experience ruins it for all
* FAQ 47 testimonials list in a widget
* TODO Add location field
* TODO Add plugin donate link
* [CleanCSS](http://cleancss.com/) the CSS

= 2.4.7 =
* Add filter `testimonials_widget_defaults_single`
* TODO clean up for premium version
* TODO Optional wpautop functionality for better formatting

= 2.4.6 =
* Add 'No order' as an Order By widget option
* Add FAQ 45 testimonial character limit
* Add Recommendation heading
* FAQ 23 mention 404
* FAQ 46 testimonial ordering by given IDs
* Update filters listing
* Use `posts_results` filter to put posts in same orders as post__in when orderby=none

= 2.4.5 =
* BUGFIX Missing CSS for testimonialswidget_join_title
* FAQ 44 Refresh interval - Thank you [biztips](http://wordpress.org/support/topic/fatal-error-558?replies=6#post-3475595)

= 2.4.4 =
* Add screenshot 15
* FAQ 34 Update CSS
* FAQ 35 Update CSS
* FAQ 42 Exclude testimonial categories from Category widget
* FAQ 43 Exclude testimonial categories from my sitemap
* Update premium features

= 2.4.3 =
* Adjust default `limit` to 10 from 25
* Add CSS `margin-top` to `cite`, `.testimonialswidget_extra` and `.testimonialswidget_text`
* BUGFIX [Keep `widget_text` with each testimonial](http://wordpress.org/support/topic/images-not-showin?replies=10)
* Donate link update
* FAQ 41 Widget height consistency

= 2.4.2 =
* BUGFIX [No image](http://wordpress.org/support/topic/update-17?replies=4) in [widget](http://wordpress.org/support/topic/plugin-testimonials-widget-short-rotating-testimonial-link-to-the-full-testimonial?replies=16)
* TODO Add refactor `get_testimonials_html`

= 2.4.1 =
* BUGFIX `testimonialswidget_widget` always random
* Comment and verbiage cleanups
* Minor refactor of `get_testimonial_html`
* TODO Added Template engine

= 2.4.0 =
* FAQ 39 Style the custom widget text
* FAQ 40 Page number pagination
* FEATURE Custom widget text
* FEATURE Make the widget title clickable
* FEATURE Page numbers via WP-PageNavi
* Refactor paging to use WordPress functions
* SCREENSHOT 12 recrop
* SCREENSHOT 13 Widget with clickable title and custom text/HTML on bottom
* SCREENSHOT 14 WP-PageNavi compatible for page numbers than default arrows
* SCREENSHOT 3 update
* SCREENSHOT 4 update
* TODO Remove Custom widget text - added
* TODO Remove Make the widget title clickable - added
* TODO Remove Page numbers - added
* TODO Remove fields to show - done via theme

= 2.3.4 =
* BUGFIX [Testimonial plugin means Set Feature Image Not Displaying](http://wordpress.org/support/topic/testimonial-plugin-means-set-feature-image-not-displaying)
* Test with WordPress 3.5.0 RC1
* TODO remove Publish & New - just click 'New Testimonial' after Publishing
* Update donate link

= 2.3.3 =
* FEATURE Improved single page view
* SCREENSHOT Single testimonial view
* TODO Meta capabilities

= 2.3.2 =
* Add filters `testimonials_widget_options_update`, `testimonials_widget_options_form`
* BUGFIX ["featured image" module disappeared](http://wordpress.org/support/topic/no-image-upload?replies=12#post-3423001)
* Clean up tags per [plugin guidelines](http://wordpress.org/extend/plugins/about/guidelines/)
* Combine source and url display when no email or company
* FAQ renumber second 36 to 37
* FAQ 38 Use filter `testimonials_widget_defaults`
* FEATURE Centralized defaults via filter `testimonials_widget_defaults`
* Only grab `paged` information once
* Prepend HTTP protocol if missing in URL
* SCREENSHOT Widget Premium Options
* Simplify filter `testimonials_widget_content`
* Simplify read more ellipsis
* Trim content after formatting

= 2.3.1 =
* BUGFIX [No image upload](http://wordpress.org/support/topic/no-image-upload)
* FAQ 36 Why donate?

= 2.3.0 =
* BUGFIX No paging when cached
* FAQ 3 Check for empty $data
* FAQ 33 Change more content ellipsis
* FAQ 34/35 Clarify CSS classes
* FAQ 36 Configure Next and Previous page indicators
* FEATURE (Premium) [Read More links](http://wordpress.org/support/topic/plugin-testimonials-widget-short-rotating-testimonial-link-to-the-full-testimonial) to [full testimonial page](http://wordpress.org/support/topic/very-easy-to-use-moderately-easy-to-style)
* FEATURE Easier to configure Next and Previous page indicators
* Refactor `get_testimonial_html`
* Refactor testimonial HTML creation methods
* Remove "Read more…" preparations
* Replace `testimonials_truncate` with WordPress's `wp_trim_words`
* SCREENSHOTS 'Read more' links
* Sanitize names
* TEMP Prevent widget caching
* TODO Clarify 'Read more'
* TODO Remove - CSV Export
* TODO Updates
* Update POT file

= 2.2.9 =
* BUGFIX [Testimonial List Loading 2nd Blank Box](http://wordpress.org/support/topic/testimonial-list-loading-2nd-blank-box)

= 2.2.8 =
* Begin "Read more…" preparations
* Correct content display processing
* FAQ 32 Min-height usage
* FAQ 4 Custom code placement clarification
* TODO Updates
* Widgets display content sans `wpautop` formatting

= 2.2.7 =
* Catch widget number in cache
* FAQ Custom query code. Thank you [tcwebguru](http://wordpress.org/support/topic/display-on-page-without-widget)
* FAQ Change Testimonials Widget text labels
* Language verbiage correction
* PHP notice fix - esc_attr
* Remove premium code include

= 2.2.6 =
* BUGFIX Widget config not saving correctly
* FAQ Export/import
* TODO Updates

= 2.2.5 =
* Adapt for [Testimonials Widget Premium plugin](http://aihr.us/wordpress/testimonials-widget-premium/)
* Add support text
* Correct verbiage spacing
* Explain `limit`
* TODO revisions

= 2.2.4 =
* BUGFIX [Tags - no more than 2?](http://wordpress.org/support/topic/tags-no-more-than-2)
* Clean up PHP notices
* Fix Changelog link
* PREMIUM Implement testimonials query and content caching
* TODO update

= 2.2.3 =
* Begin premium plugin adaptions
* BUGFIX [Tags - no more than 2?](http://wordpress.org/support/topic/tags-no-more-than-2)
* BUGFIX [Updated - Now getting fatal error when using testimonialswidget_list()](http://wordpress.org/support/topic/updated-now-getting-fatal-error-when-using-testimonialswidget_list)
* Clean up links in readme.txt
* Correct company and URL link usage
* [Correct readme.txt to standard](http://wordpress.org/extend/plugins/about/readme.txt)
* Don't rotate testimonial if only 1 
* TODO updates

= 2.2.2 =
* BUGFIX [Now getting fatal error when using testimonialswidget_list()](http://wordpress.org/support/topic/updated-now-getting-fatal-error-when-using-testimonialswidget_list)
* Theme function defaults
* TODO updates
* URL pointing update

= 2.2.1 =
* Number FAQ Entries
* Revise Installation Usage text
* Revise Shortcode and Widget Options text

= 2.2.0 =
* FAQ `testimonialswidget_widget()` example
* Multisite compatible
* Reversion as 2.1.10 was a minor release than only bug fixes

= 2.1.10 =
* [Add title field ](http://wordpress.org/support/topic/plugin-testimonials-widget-just-tried-216-thoughts-suggestions)
* Consolidate defaults to simplify code maintenance
* Correct CSS testimonial list spacing
* Debug true - clear out PHP notices and such
* Default minimum height removed for widgets, now optional
* Maximum height setting
* [Remove CSS `position` attributes `.testimonialswidget_testimonial { position: absolute; }`](http://wordpress.org/support/topic/testimonials-widget-not-showing-correctly-on-sub-pages)
* TODO cleanup
* Update language POT
* Update screenshots
* Update WPML
* Widget options dropdown for ORDER BY entries

= 2.1.9 =
* Allow min_height 0
* FAQ - How do I use the theme function `testimonialswidget_list()`?
* Move CSS include to header

= 2.1.8 =
* Remove testimonialswidget_widget char_limit default
* TODO - debug true

= 2.1.7 =
* [0 disables char_limit](http://wordpress.org/support/topic/plugin-testimonials-widget-more-than-one-testimonial-appears-overlaps-content-below-the-widget)
* [Set link target](http://wordpress.org/support/topic/plugin-testimonials-widget-just-tried-216-thoughts-suggestions)
* Update widget option top screenshot

= 2.1.6 =
* FAQ: `ORDER BY` explanation
* FAQ: `testimonial_extra` explanation
* [Moved CSS to footer](http://wordpress.org/support/topic/plugin-testimonials-widget-html-validation)
* Next testimonial link idea
* Option: Add `hide_not_found` to prevent showing "No testimonials found"
* Revise theme methods as functions
* Screenshot: Update upper widget options
* Staged widget testimonials are initially `display: none` via CSS `.testimonialswidget_display_none`
* TODO updates
* Verbiage: Refresh Interval to Rotation Speed
* Widget option explanations

= 2.1.5 =
* Always apply min-height

= 2.1.4 =
* Enable WPML
* Idea - Maximum height setting
* Revise description
* Revise TODO

= 2.1.3 =
* Allow commas in meta_key
* FAQ on page not found
* Fix widget Random order always true condition
* Increase bottom margin spacing for listed testimonials
* TODO vote casting note
* Update localization pot file

= 2.1.2 =
* Add `hide_gravatar` option
* Add apply_filters( 'testimonials_widget_data', $testimonial_data ) to process data before display
* Add right margin to gravatar image
* Added empty testimonial data field `testimonial_extra` for customization in testimonials
* Allow widget and shortcode sorting by post meta values via `meta_key`
* Correct PHP static accessors
* Update FAQ
* Update widget options screenshots
* Working full testimonial URLs

= 2.1.1 =
* Add [testimonialswidget_list] paging screenshot

= 2.1.0 =
* Enable paging for [testimonialswidget_list] shortcode
* Flush rewrite rules on activation
* Disallow paging in widget and [testimonialswidget_widget] shortcode

= 2.0.6 =
* Update shortcode option directions

= 2.0.5 =
* Ignore already imported
* Mark `testimonialswidget_widget() $number` argument as optional

= 2.0.4 =
* Allow for 0 refresh_interval in get_testimonials_html

= 2.0.3 =
* Allow for 0 refresh_interval in widget

= 2.0.2 =
* BUGFIX [Warning: call_user_func_array() ??](http://wordpress.org/support/topic/plugin-testimonials-widget-warning-call_user_func_array)
* Added Testimonials_Widget_Widget::get_testimonials_scripts for use with add_filter for wp_footer

= 2.0.1 =
* Verbiage updates
* Readme.txt validation
* widget q p tag display inline
* GPL2 licensing
* Move upgrade notice text towards installation
* Reorder screenshots
* Apply 'the_content' filters directly to prevent plugin baggage
* Update screenshot-7.png

= 2.0.0 =
* Major rewrite
* Add filters for image & gravatar sizes
* Admin bar New > Testimonial
* Authors and lower can manage their own testimonials
* Auto-migration from old to new format upon install
	* Public > Published
	* Not public > Private
* Categories - product, project, service
* Clean up verbiage
* Cleaner widget class
* Custom columns list view
	* Image
	* Source
	* Shortcode
	* Email
	* Company
	* URL
	* Published by
	* Category
	* Tags
	* Date
* Custom fields metabox
	* Email
	* Company
	* URL
* Custom post-type
* Default fields - source, email, company, URL
* Editors and higher can manage all testimonials and edit testimonial publisher
* Enable categories and tags
* Enable full shortcode options in widget
* Gravatar
* HTML content allowed
* Images
* JavaScript in footer
* Localization
* Reference shortcode column
* Reorganize widget options panel
* Rotation JavaScript in footer than body
* Shortcode options validation
* WP_Query for get_testimonials()
* Widget image on own line
* Widget options
	* Title
	* Category filter
	* Tags filter
	* Require all tags
	* Advanced options
	* Hide image?
	* Hide source?
	* Hide email?
	* Hide company?
	* Hide URL?
	* Character limit
	* IDs filter
	* Limit
	* Maximum Height
	* Minimum Height
	* ORDER BY
	* ORDER BY Order
	* Random order
	* Rotation Speed
* Move caching to ideas
* Add theme function `testimonialswidget_widget()` doc
* Update POT
* [testimonialswidget_widget] shortcode
* Match [testimonialswidget_widget] shortcode option defaults to widget
* Update screenshots
* Readd Minimum Height - need help getting around this

= 0.2.13 =
* Clean up CSS
* Remove q & cite p wrapper

= 0.2.12 =
* the_title filter fix

= 0.2.11 =
* Enable character limit for shortcode

= 0.2.10 =
* Character limit nows forces text truncation than preventing of testimonial to show
* Add option - Limit number of testimonials to pull at a time
* Sanitize widget variables
* Fix random_order issue on testimonials widget

= 0.2.9 =
* Require Editor role for managing Testimonials

= 0.2.8 =
* CSS testimonialswidget_testimonial_list fix #2

= 0.2.7 =
* CSS testimonialswidget_testimonial_list fix

= 0.2.6 =
* CSS updates for widgets and lists

= 0.2.5 =
* Add span.testimonialswidget_join for author , join text
* Add nl2br for testimonials display on a page

= 0.2.4 =
* Shortcode added - Thank you Hal Gatewood

= 0.2.3 =
* Allow testimonials to have multiple tags
* Show only quotes with all tags

= 0.2.2 =
* Show newest testimonials first in admin list by default
* Quick locallization
* Quotes Collection recommendation

= 2011-10-03: Version 0.2 =
* Multi-widget enabled
* Testimonial, author & source text are clickable automatically
* Allow 0 refresh to make widget static
* Allow pressing return when editing testimonial to save record

= 2011-08-12: Version 0.1 =
* initial release


== Upgrade Notice ==

= 2.8.0 =
* Deprecated
	* `hide_author` now `hide_source`
* Removed filters `testimonials_widget_options_update`, `testimonials_widget_options_form`
	* Use `testimonials_widget_validate_settings` and `testimonials_widget_settings` instead
* Renamed variable and related class `widget_text` to `bottom_text`

= 2.7.3 =
* Quotes are no longer handled via `q`, `p:before`, or `p:after` CSS. It's handled via `.testimonialswidget_testimonial .testimonialswidget_open_quote:before` and `.testimonialswidget_testimonial .testimonialswidget_close_quote:after`
* This change was made to keep consistency in how quotes were managed and to reduce the number of exception cases. In the end, this is simpler.

= 2.7.0 =
* Quotes with `keep_whitespace=true` aren't applied via CSS `.testimonialswidget_testimonial q` tag anymore, but `.testimonialswidget_testimonial q p:first-child:before` and `.testimonialswidget_testimonial q p:last-child:after`
* Widget testimonial `p` tags are no longer CSS `display: inline`, `display: block` as expected

= 2.4.1 =
* Paging is on by default, except for widgets

= 2.0.0 =
* CSS
	* Class `testimonialswidget_company` replaces `testimonialswidget_source`
	* Class `testimonialswidget_source` replaces `testimonialswidget_author`
	* The tighten widget display up, p tags within q are displayed inline.
* JavaScript
	* The JavaScript for rotating testimonials is moved to the footer. As such, your theme requires `wp_footer()` in the footer.
* Shortcode options
	* `hide_source` replaced by `hide_url`
	* `hide_author` replaced by `hide_source`
* Testimonials
	* Migration from the old custom table to new custom post type is automatically done. Import might take a few moments to complete.
	* Company, URL and email details are attempted to be identified and placed properly based upon the original author and source fields. The company is "guessed" from the `author` field when there's a ", " or " of " context. If the `source` is an email, it's saved as such. Otherwise, it's assumed to be a URL.
	* Public testimonials are saved as Published. Non-public testimonials are marked as Private.
* Widget options
	* "Show author" and "Show source" options are replaced by "Hide source" and "Hide URL" respectively. There's no backwards compatibility for these changes. 
	* Default `min-height` is now 250px than 150px.


== TODO ==

Is there something you want done? Write it up on the [support forums](http://wordpress.org/support/plugin/testimonials-widget) and then [donate](http://aihr.us/about-aihrus/donate/) or [send along](http://aihr.us/contact-aihrus/) an [awesome testimonial](http://aihr.us/about-aihrus/testimonials/).

* BUG [Post Types Order](http://wordpress.org/support/topic/random-order-doesnt-work) - sorting conflict
