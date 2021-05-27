if (window.addthis_product === undefined) { window.addthis_product = "wpp"; } if (window.wp_product_version === undefined) { window.wp_product_version = "wpp-6.1.6"; } if (window.wp_blog_version === undefined) { window.wp_blog_version = "4.9.14"; } if (window.addthis_share === undefined) { window.addthis_share = {}; } if (window.addthis_config === undefined) { window.addthis_config = {"data_track_clickback":false,"ignore_server_config":true,"ui_atversion":"300"}; } if (window.addthis_layers === undefined) { window.addthis_layers = {}; } if (window.addthis_layers_tools === undefined) { window.addthis_layers_tools = [{"sharetoolbox":{"numPreferredServices":5,"counts":"one","size":"32px","style":"fixed","shareCountThreshold":0,"elements":".addthis_inline_share_toolbox_above"}},{"sharetoolbox":{"numPreferredServices":5,"counts":"one","size":"32px","style":"fixed","shareCountThreshold":0,"elements":".addthis_inline_share_toolbox_below"}}]; } else { window.addthis_layers_tools.push({"sharetoolbox":{"numPreferredServices":5,"counts":"one","size":"32px","style":"fixed","shareCountThreshold":0,"elements":".addthis_inline_share_toolbox_above"}}); window.addthis_layers_tools.push({"sharetoolbox":{"numPreferredServices":5,"counts":"one","size":"32px","style":"fixed","shareCountThreshold":0,"elements":".addthis_inline_share_toolbox_below"}});  } if (window.addthis_plugin_info === undefined) { window.addthis_plugin_info = {"info_status":"enabled","cms_name":"WordPress","plugin_name":"Share Buttons by AddThis","plugin_version":"6.1.6","plugin_mode":"WordPress","anonymous_profile_id":"wp-24788739e0a568edacbedc5175a662b8","page_info":{"template":false}}; } 
                    (function() {
                      var first_load_interval_id = setInterval(function () {
                        if (typeof window.addthis !== 'undefined') {
                          window.clearInterval(first_load_interval_id);
                          if (typeof window.addthis_layers !== 'undefined' && Object.getOwnPropertyNames(window.addthis_layers).length > 0) {
                            window.addthis.layers(window.addthis_layers);
                          }
                          if (Array.isArray(window.addthis_layers_tools)) {
                            for (i = 0; i < window.addthis_layers_tools.length; i++) {
                              window.addthis.layers(window.addthis_layers_tools[i]);
                            }
                          }
                        }
                     },1000)
                    }());
                