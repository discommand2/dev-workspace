cd /workspaces/dev-workspace

# Add each repository as a submodule
git submodule add git@github.com:discommand2/discommand2.git
git submodule add git@github.com:discommand2/core.git
git submodule add git@github.com:discommand2/provider-claude.git
git submodule add git@github.com:discommand2/plugin-template.git
git submodule add git@github.com:discommand2/plugin-iot.git
git submodule add git@github.com:discommand2/plugin-python.git
git submodule add git@github.com:discommand2/plugin-websocket.git
git submodule add git@github.com:discommand2/plugin-email.git
git submodule add git@github.com:discommand2/plugin-clickup.git
git submodule add git@github.com:discommand2/plugin-http-api.git
git submodule add git@github.com:discommand2/plugin-php.git
git submodule add git@github.com:discommand2/plugin-filesystem.git
git submodule add git@github.com:discommand2/plugin-sql.git
git submodule add git@github.com:discommand2/plugin-bash.git
git submodule add git@github.com:discommand2/plugin-rabbitmq.git
git submodule add git@github.com:discommand2/plugin-browser.git
git submodule add git@github.com:discommand2/plugin-webapp.git
git submodule add git@github.com:discommand2/plugin-cli.git
git submodule add git@github.com:discommand2/plugin-vision.git
git submodule add git@github.com:discommand2/provider-openai.git
git submodule add git@github.com:discommand2/provider-template.git

cd provider-claude
git remote add upstream git@github.com:discommand2/provider-template.git
cd ..

cd plugin-template
git remote add upstream git@github.com:discommand2/plugin-template.git
cd ..

cd plugin-iot
git remote add upstream git@github.com:discommand2/plugin-template.git
cd ..

cd plugin-python
git remote add upstream git@github.com:discommand2/plugin-template.git
cd ..

cd plugin-websocket
git remote add upstream git@github.com:discommand2/plugin-template.git
cd ..

cd plugin-email
git remote add upstream git@github.com:discommand2/plugin-template.git
cd ..

cd plugin-clickup
git remote add upstream git@github.com:discommand2/plugin-template.git
cd ..

cd plugin-http-api
git remote add upstream git@github.com:discommand2/plugin-template.git
cd ..

cd plugin-php
git remote add upstream git@github.com:discommand2/plugin-template.git
cd ..

cd plugin-filesystem
git remote add upstream git@github.com:discommand2/plugin-template.git
cd ..

cd plugin-sql
git remote add upstream git@github.com:discommand2/plugin-template.git
cd ..

cd plugin-bash
git remote add upstream git@github.com:discommand2/plugin-template.git
cd ..

cd plugin-rabbitmq
git remote add upstream git@github.com:discommand2/plugin-template.git
cd ..

cd plugin-browser
git remote add upstream git@github.com:discommand2/plugin-template.git
cd ..

cd plugin-webapp
git remote add upstream git@github.com:discommand2/plugin-template.git
cd ..

cd plugin-cli
git remote add upstream git@github.com:discommand2/plugin-template.git
cd ..

cd plugin-vision
git remote add upstream git@github.com:discommand2/plugin-template.git
cd ..

cd provider-openai
git remote add upstream git@github.com:discommand2/provider-template.git
cd ..

cd provider-template
git remote add upstream git@github.com:discommand2/provider-template.git
cd ..

# Run composer install in each submodule
git submodule foreach --recursive 'composer install'

