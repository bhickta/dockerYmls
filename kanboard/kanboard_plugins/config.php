// Plugins directory
define('PLUGINS_DIR', __DIR__.DIRECTORY_SEPARATOR.'plugins');

// Plugins directory URL
define('PLUGIN_API_URL', 'https://kanboard.org/plugins.json');

// Enable/Disable plugin installer (Disabled by default for security reasons)
// There is no code review or any approval process to submit a plugin.
// This is up to the Kanboard instance owner to validate if a plugin is legit.
define('PLUGIN_INSTALLER', true);
