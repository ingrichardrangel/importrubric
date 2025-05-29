<h2>🧩 Plugin Name: Import Rubric from CSV</h2>
<p><strong>Component:</strong> <code>block_importrubric</code></p>

<hr>

<h3>📌 Features</h3>
<ul>
  <li>Block available only within <strong>Assignment activities</strong>.</li>
  <li>Displays a button to launch a custom rubric importer interface.</li>
  <li>Allows importing of grading rubrics via <code>.csv</code> files.</li>
  <li>Integrates with the plugin <code>local_customgradingform_renderer</code> for backend processing.</li>
  <li>Verifies user capabilities before rendering import options.</li>
</ul>

<h3>🧪 Usage Scenario</h3>
<p>
  This block is designed for teachers and managers who want to:
</p>
<ul>
  <li>Quickly upload detailed grading rubrics.</li>
  <li>Avoid manually creating rubrics through the Moodle UI.</li>
  <li>Apply consistent evaluation criteria across assignments using CSV templates.</li>
</ul>
<p><strong>Workflow Example:</strong></p>
<ol>
  <li>The teacher opens an Assignment activity.</li>
  <li>The block displays a button labeled <em>“Import rubric from CSV”</em>.</li>
  <li>Clicking the button opens a secure upload interface.</li>
  <li>The rubric is imported and configured into the assignment automatically.</li>
</ol>

<h3>🔐 Permissions</h3>
<p>This block defines two capabilities:</p>
<ul>
  <li><code>block/importrubric:addinstance</code> – Required to see and use the block in an activity.</li>
  <li><code>block/importrubric:myaddinstance</code> – Reserved for future use on dashboards.</li>
</ul>
<p><strong>Default roles with access:</strong> <code>editingteacher</code>, <code>manager</code>.</p>

<h3>⚙️ Requirements</h3>
<ul>
  <li>Requires <strong>Moodle 4.1</strong> or later.</li>
  <li>Depends on the plugin: <code>local_customgradingform_renderer</code>.</li>
  <li>Ensure PHP version is compatible with your Moodle instance.</li>
</ul>

<hr>
<p><em>Developed by Richard Rangel – 2025</em></p>


The plugin depends on:

✅ local_customgradingform_renderer (for the rubric processing logic).

PHP version compatible with your Moodle version.
