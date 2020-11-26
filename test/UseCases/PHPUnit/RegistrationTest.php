<?php
declare(strict_types=1);

namespace Test\UseCases\PHPUnit;

use DevPro\Application\Users\CreateOrganizer;
use DevPro\Application\Users\CreateUser;
use DevPro\Domain\Model\User\UserId;

final class RegistrationTest extends UseCaseTestCase
{
    /**
     * @before
     */
    protected function givenTodayIs(): void
    {
        $this->container->setCurrentDate('01-01-2020');
    }

    /**
     * @test
     */
    public function aScheduledTrainingShowsUpInUpcomingTrainings(): void
    {
        // When the organizer schedules a new training called "Decoupling from infrastructure" for "24-01-2020"
        $this->markTestIncomplete('TODO Assignment 1');

        // Then it shows up on the list of upcoming trainings
        $this->markTestIncomplete('TODO Assignment 2');
    }

    private function theOrganizer(): UserId
    {
        return $this->container->application()->createOrganizer(new CreateOrganizer());
    }

    private function aUser(): UserId
    {
        return $this->container->application()->createUser(new CreateUser('A user'));
    }
}
