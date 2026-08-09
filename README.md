# Activian Guild Website

Static website for the Activian guild in **MU: Dark Epoch** on **Gravity 21**.

## GitHub Pages launch

The website is now GitHub Pages compatible because the entry file is `index.html` and all assets use relative paths.

1. Push this repository to GitHub.
2. Open the repository on GitHub.
3. Go to **Settings** → **Pages**.
4. In **Build and deployment**, choose **Deploy from a branch**.
5. Select the branch with the site files, usually `main`, and select the root folder `/`.
6. Click **Save**.
7. Wait for GitHub Pages to publish the site. The final URL will look like:

```text
https://YOUR_GITHUB_USERNAME.github.io/YOUR_REPOSITORY_NAME/
```

## Local preview

GitHub Pages serves static files, so no PHP server is required. For local preview, run any static server from the repository root, for example:

```bash
python3 -m http.server 8080
```

Then open:

```text
http://127.0.0.1:8080/
```

Do not open `index.html` directly from the filesystem if you want language switching to work, because browsers often block loading JSON files from `file://` URLs.
