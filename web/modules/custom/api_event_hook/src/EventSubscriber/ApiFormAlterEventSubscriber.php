<?php
namespace Drupal\api_event_hook\EventSubscriber;

use Drupal\hook_event_dispatcher\HookEventDispatcherInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class ApiFormAlterEventSubscriber implements EventSubscriberInterface{
    public static function getSubscribedEvents() {
        return [
            HookEventDispatcherInterface::FORM_ALTER => 'hookFormAlter',
        ];
    }

    public function hookFormAlter($event) {
        // kint($event); die();
        if($event->getFormId() == 'developer_app_add_for_developer_form') {
            $form = $event->getForm();
            $myGmapsProducts = [];
            $myBarcodeProducts = [];

            foreach($form['api_products']['#options'] as $key => $value) {
                $display_name = substr($value, 0, 5);
                if ($display_name == 'hello') {
                    array_push($myGmapsProducts, $value);
                    drupal_set_message('This is a gmaps product: ' . $key);
                }
                if ($display_name == 'Test ') {
                    array_push($myBarcodeProducts, $value);
                    drupal_set_message('This is a hello product: ' . $key);
                }
            }

            $form['group1'] = array(
                '#type' => 'fieldset',
                '#title' => t('API Products'),
                '#weight' => 10,
                '#collapsible' => FALSE,
                '#collapsed' => FALSE,  
                );

            $form['group1']['product1'] = [
                '#title' => 'Google Maps API',
                '#type' => 'radios',
                '#default_value' => 1,
                '#options' => $myGmapsProducts
            ];
            $form['group1']['product2'] = [
                '#title' => 'Barcode API',
                '#type' => 'radios',
                '#default_value' => 1,
                '#options' => $myBarcodeProducts
            ];
            $event->setForm($form);
        }
    }
}