<?php

namespace Radiocubito\LaravelPackageTools\Commands\Tests;

use PHPUnit\Framework\TestCase;
use Radiocubito\LaravelPackageTools\Commands\MakeCommand;
use Radiocubito\LaravelPackageTools\Commands\MakeEvent;
use Radiocubito\LaravelPackageTools\Commands\MakeJob;
use Radiocubito\LaravelPackageTools\Commands\MakeLivewire;
use Radiocubito\LaravelPackageTools\Commands\MakeNotification;
use Radiocubito\LaravelPackageTools\Commands\MakeRequest;
use Radiocubito\LaravelPackageTools\Commands\MakeRule;
use Spatie\Snapshots\MatchesSnapshots;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\BufferedOutput;

class GenerationTest extends TestCase
{
    use MatchesSnapshots;

    /** @test */
    public function it_can_make_rule_classes()
    {
        $input = new ArrayInput([
            'name' => 'ExampleRule',
            '--force' => true,
        ], new InputDefinition([
            new InputArgument('name'),
            new InputOption('force'),
        ]));

        $output = new BufferedOutput();

        $command = new MakeRule;
        $command->outputPath = __DIR__.'/output/';
        $command->__invoke($input, $output);

        $this->assertTrue(file_exists($command->outputPath.'/Rules/ExampleRule.php'));
        $this->assertMatchesFileSnapshot($command->outputPath.'/Rules/ExampleRule.php');
    }

    /** @test */
    public function it_can_make_command_classes()
    {
        $input = new ArrayInput([
            'name' => 'ExampleCommand',
            '--force' => true,
        ], new InputDefinition([
            new InputArgument('name'),
            new InputOption('force'),
        ]));

        $output = new BufferedOutput();

        $command = new MakeCommand;
        $command->outputPath = __DIR__.'/output/';
        $command->__invoke($input, $output);

        $this->assertTrue(file_exists($command->outputPath.'/Console/Commands/ExampleCommand.php'));
        $this->assertMatchesFileSnapshot($command->outputPath.'/Console/Commands/ExampleCommand.php');
    }

    /** @test */
    public function it_can_make_request_classes()
    {
        $input = new ArrayInput([
            'name' => 'ExampleRequest',
            '--force' => true,
        ], new InputDefinition([
            new InputArgument('name'),
            new InputOption('force'),
        ]));

        $output = new BufferedOutput();

        $command = new MakeRequest;
        $command->outputPath = __DIR__.'/output/';
        $command->__invoke($input, $output);

        $this->assertTrue(file_exists($command->outputPath.'/Http/Requests/ExampleRequest.php'));
        $this->assertMatchesFileSnapshot($command->outputPath.'/Http/Requests/ExampleRequest.php');
    }

    /** @test */
    public function it_can_make_job_classes()
    {
        $input = new ArrayInput([
            'name' => 'ExampleJob',
            '--force' => true,
        ], new InputDefinition([
            new InputArgument('name'),
            new InputOption('force'),
        ]));

        $output = new BufferedOutput();

        $command = new MakeJob;
        $command->outputPath = __DIR__.'/output/';
        $command->__invoke($input, $output);

        $this->assertTrue(file_exists($command->outputPath.'/Jobs/ExampleJob.php'));
        $this->assertMatchesFileSnapshot($command->outputPath.'/Jobs/ExampleJob.php');
    }

    /** @test */
    public function it_can_make_event_classes()
    {
        $input = new ArrayInput([
            'name' => 'ExampleEvent',
            '--force' => true,
        ], new InputDefinition([
            new InputArgument('name'),
            new InputOption('force'),
        ]));

        $output = new BufferedOutput();

        $command = new MakeEvent;
        $command->outputPath = __DIR__.'/output/';
        $command->__invoke($input, $output);

        $this->assertTrue(file_exists($command->outputPath.'/Events/ExampleEvent.php'));
        $this->assertMatchesFileSnapshot($command->outputPath.'/Events/ExampleEvent.php');
    }

    /** @test */
    public function it_can_make_notification_classes()
    {
        $input = new ArrayInput([
            'name' => 'ExampleNotification',
            '--force' => true,
        ], new InputDefinition([
            new InputArgument('name'),
            new InputOption('force'),
        ]));

        $output = new BufferedOutput();

        $command = new MakeNotification;
        $command->outputPath = __DIR__.'/output/';
        $command->__invoke($input, $output);

        $this->assertTrue(file_exists($command->outputPath.'/Notifications/ExampleNotification.php'));
        $this->assertMatchesFileSnapshot($command->outputPath.'/Notifications/ExampleNotification.php');
    }

    /** @test */
    public function it_can_make_livewire_classes()
    {
        $input = new ArrayInput([
            'name' => 'ExampleLivewire',
            '--force' => true,
        ], new InputDefinition([
            new InputArgument('name'),
            new InputOption('force'),
        ]));

        $output = new BufferedOutput();

        $command = new MakeLivewire;
        $command->outputPath = __DIR__.'/output/';
        $command->__invoke($input, $output);

        $this->assertTrue(file_exists($command->outputPath.'/Http/Livewire/ExampleLivewire.php'));
        $this->assertMatchesFileSnapshot($command->outputPath.'/Http/Livewire/ExampleLivewire.php');
    }
}
