# Bazaarvoice SEO SDK for PHP by Toolstation

** It's a simple upgrade that enables you to pull seo content from a database **
** Based on Bazaarvoice SEO SDK for PHP by Alltricks **

This repository contains the codebase for the Bazaarvoice SEO SDK for PHP. Find
out more about Bazaarvoice SEO at [Bazaarvoice Knowledge][1].

## Documentation and Packaged Releases

The latest SDK documentation and links to releases are available at
[Bazaarvoice Knowledge][1].

[1]: http://knowledge.bazaarvoice.com/bvseo/

Example:

    $bv = new Bazaarvoice(array(
      'staging' => $this->settings->reviews->staging,
      'bv_root_folder' => $this->settings->reviews->api->bv_root_folder,
      'subject_id' => $partcode,
      'cloud_key' => $this->settings->reviews->api->cloud_key,
      'execution_timeout' => 6000000,
    ));

    return $bv->reviews->setFetchMethod(function($url, $bazzarVoice, $pageNumber){
        $client_name = $bazzarVoice->config['client_name'];
        $content_type = $bazzarVoice->config['content_type'];
        $subject_type = $bazzarVoice->config['subject_type'];
        $subject_id = $bazzarVoice->config['subject_id'];

        //Fetch data from database using above parameters
        //.....
        return "The seo data";
    });
