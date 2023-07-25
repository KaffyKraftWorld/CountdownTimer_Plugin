# Countdown Timer Plugin

The Countdown Timer Plugin allows you to add customizable countdown timers to your WordPress posts or pages. You can set the timer's duration, customize its appearance, and display it on your specific posts or pages using a shortcode.

## Installation

1. Download the plugin ZIP file from this GitHub repository.

2. Login to your WordPress admin dashboard.

3. Navigate to `Plugins` > `Add New`.

4. Click on the `Upload Plugin` button.

5. Choose the downloaded ZIP file and click `Install Now`.

6. Once installed, click on `Activate` to activate the plugin.

## Usage

### Create a Countdown Timer

1. After activating the plugin, go to your WordPress editor and create or edit a post or page where you want to add the countdown timer.

2. Add the `[countdown]` shortcode to the post or page content. For example:

- `duration`: Specify the countdown duration in seconds (default: 30 seconds).
- `format`: Choose the format to display the countdown (default: days:hours:minutes:seconds).
- `appearance`: Add inline CSS styles to customize the appearance of the countdown timer (optional).

3. Save or update the post/page.

### Customize the Countdown Timer Appearance

The appearance of the countdown timer can be further customized using CSS styles. By default, the timer will inherit styles from your theme, but you can override them using the `appearance` attribute in the `[countdown]` shortcode.