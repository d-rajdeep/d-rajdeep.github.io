#!/usr/bin/env bash
set -euo pipefail
mkdir -p assets/images/websites
# Run this from the portfolio root to replace fallback previews with fresh live screenshots.
curl -L --fail --retry 2 --output 'assets/images/websites/thewedbees.png' 'https://image.thum.io/get/width/1200/crop/675/noanimate/maxAge/1/https://thewedbees.com/' || echo 'Could not refresh thewedbees.png'
curl -L --fail --retry 2 --output 'assets/images/websites/wednesty.png' 'https://image.thum.io/get/width/1200/crop/675/noanimate/maxAge/1/https://wednesty.in/' || echo 'Could not refresh wednesty.png'
curl -L --fail --retry 2 --output 'assets/images/websites/a2zflats.png' 'https://image.thum.io/get/width/1200/crop/675/noanimate/maxAge/1/https://a2zflats.com/' || echo 'Could not refresh a2zflats.png'
curl -L --fail --retry 2 --output 'assets/images/websites/oukhod.png' 'https://image.thum.io/get/width/1200/crop/675/noanimate/maxAge/1/https://oukhodexpress.com/' || echo 'Could not refresh oukhod.png'
curl -L --fail --retry 2 --output 'assets/images/websites/nextlevelpets.png' 'https://image.thum.io/get/width/1200/crop/675/noanimate/maxAge/1/https://nextlevelpets.in/' || echo 'Could not refresh nextlevelpets.png'
curl -L --fail --retry 2 --output 'assets/images/websites/kwilt.png' 'https://image.thum.io/get/width/1200/crop/675/noanimate/maxAge/1/https://kwiltmattress.com/' || echo 'Could not refresh kwilt.png'
curl -L --fail --retry 2 --output 'assets/images/websites/echomag.png' 'https://image.thum.io/get/width/1200/crop/675/noanimate/maxAge/1/https://echomag.d-rajdeep.in/' || echo 'Could not refresh echomag.png'
curl -L --fail --retry 2 --output 'assets/images/websites/kirtidhara.png' 'https://image.thum.io/get/width/1200/crop/675/noanimate/maxAge/1/https://kirtidhara.in/' || echo 'Could not refresh kirtidhara.png'
