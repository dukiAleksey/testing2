<div class="wrap">

	<div id="icon-options-general" class="icon32"></div>
	<h2>Test Plugin</h2>

	<div id="poststuff">

		<div id="post-body" class="metabox-holder columns-2">

			<!-- main content -->
			<div id="post-body-content">

				<div class="meta-box-sortables ui-sortable">

					<div class="postbox">

						<div class="handlediv" title="Click to toggle"><br></div>
						<!-- Toggle -->

						<h3 class="hndle"><span><?php esc_attr_e( 'Main Content Header', 'wp_admin_style' ); ?></span>
						</h3>

						<div class="inside">

							<p><strong>Entering data</strong></p>

							<form method="post" action="">

								<table class="form-table">
									<tr>
										<td class="row-title">
											<label for="duki_test">UserName</label>
										</td>
										<td>
											<input name="duki_test" id="duki_test" type="text" value="regular-text" class="regular-text" /><br>										
										</td>
									</tr>

								</table>

								<p><input class="button-primary" type="submit" name="duki_test_submit" value="Save" /></p>

							</form>

							<br class="clear" />
						</div>
						<!-- .inside -->

					</div>
					<!-- .postbox -->

				</div>
				<!-- .meta-box-sortables .ui-sortable -->

			</div>
			<!-- post-body-content -->

			<!-- sidebar -->
			<div id="postbox-container-1" class="postbox-container">

				<div class="meta-box-sortables">

					<div class="postbox">

						<div class="handlediv" title="Click to toggle"><br></div>
						<!-- Toggle -->

						<h3 class="hndle"><span><?php esc_attr_e(
									'Sidebar Content Header', 'wp_admin_style'
								); ?></span></h3>

						<div class="inside">
							<p><?php esc_attr_e( 'Everything you see here, from the documentation to the code itself, was created by and for the community. WordPress is an Open Source project, which means there are hundreds of people all over the world working on it. (More than most commercial platforms.) It also means you are free to use it for anything from your cat’s home page to a Fortune 500 web site without paying anyone a license fee and a number of other important freedoms.', 'wp_admin_style' ); ?></p>
						</div>
						<!-- .inside -->

					</div>
					<!-- .postbox -->

				</div>
				<!-- .meta-box-sortables -->

			</div>
			<!-- #postbox-container-1 .postbox-container -->

		</div>
		<!-- #post-body .metabox-holder .columns-2 -->

		<br class="clear">
	</div>
	<!-- #poststuff -->

</div> <!-- .wrap -->
