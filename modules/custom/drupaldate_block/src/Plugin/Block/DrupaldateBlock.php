<?php

namespace Drupal\drupaldate_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'DrupalDate Block' Block.
 * @Block(
 * id = "drupaldate_block",
 * admin_label = @Translation("Drupaldate block"),
 * category = @Translation("My Date return block"),
 * )
 */

class DrupaldateBlock extends BlockBase{

/**
 * {@inheritdoc}
 */

    public function build(){
        return [
            '#markup' => $this->getRandomDate(),
            '#cache' => [
                'max-age' => 0,
            ],
        ];
    }

    /**
     * Private function for getting random deadlines
     */
    private function getRandomDate(){
        /*$dates = [
            '<i>Danes je ponedeljek</i>',
            '<i>Danes je torek</i>',
            '<i>Danes je sreda</i>',
            '<i>Danes je četrtek</i>',
            '<i>Danes je petek</i>',
        ];
        return $dates[array_rand($dates)];*/

        /*$request_time = \Drupal::time()->getCurrentTime();
        $date_output = date('d/M/Y H:i:s', $request_time);

        $result = \Drupal::database()->query('SELECT * FROM due_date')->fetchAll();

        if($result){
            while ($row = $result->fetchAssoc()) {
                return $row['name'];
              }
        }
        else{
            return 'ne dela';
        }*/

    }
}