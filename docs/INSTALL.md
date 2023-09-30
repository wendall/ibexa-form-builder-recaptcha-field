# IbexaFormBuilderRecaptchaBundle

## Installation

### Get the bundle using composer

Add IbexaFormBuilderRecaptchaBundle by running this command from the terminal at the root of
your symfony project:

```bash
composer require wendall/ibexa-form-builder-recaptcha-field
```

## Enable the bundle

To start using the bundle, register the bundle in your application's kernel class:

```php
// config/bundles.php
return [
    // ...
    EWZ\Bundle\RecaptchaBundle\EWZRecaptchaBundle::class => ['all' => true],
    Wendall\IbexaFormBuilderRecaptchaBundle\IbexaFormBuilderRecaptchaBundle::class => ['all' => true],
    // ...
];
```

## Configure your reCAPTCHA public/private keys

Modify your `EWZ_RECAPTCHA_SITE_KEY` and `EWZ_RECAPTCHA_SECRET` config in `.env`

```
# .env
EWZ_RECAPTCHA_SITE_KEY=here_is_your_public_key
EWZ_RECAPTCHA_SECRET=here_is_your_private_key
```

You can generate reCAPCTHA keys on https://www.google.com/recaptcha/admin#list.

In the development environment reCAPTCHA is disabled by default. To enable it change `enabled` flag from `false` to `true` in `config/packages/dev/ewz_recaptcha.yaml`

```yaml
ewz_recaptcha:
    enabled: true
```

See https://github.com/excelwebzone/EWZRecaptchaBundle#step2-configure-the-bundles for more detailed description of available configuration. 

