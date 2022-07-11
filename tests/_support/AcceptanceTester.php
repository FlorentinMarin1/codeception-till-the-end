<?php


/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method void pause()
 *
 * @SuppressWarnings(PHPMD)
*/
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

    /**
     * Define custom actions here
     */

    public function assertTitlePage($page)
    {
        $this->seeInTitle($page);
    }

    public function registerPlayer()
    {
        $this->submitForm('#player_register', [
            'first' => 'Florentin',
            'last' => 'Marin',
            'club' => 'Liverpool',
            'nationality' => 'romanian',
            'position' => 'midfielder',
            'age' => 30,
            'marketValue' => 400000
        ]);
    }

    public function assertDbRows()
    {
        $this->seeInDatabase('player', [
            'first_name' => 'Florentin',
            'last_name' => 'Marin',
            'club' => 'Liverpool',
            'nationality' => 'romanian',
            'position' => 'midfielder',
            'age' => 30,
            'market_value' => 400000
        ]);
    }
}
