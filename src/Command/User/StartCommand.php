<?php
/**
 * Inline Games - Telegram Bot (@inlinegamesbot)
 *
 * (c) 2016-2019 Jack'lul <jacklulcat@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Longman\TelegramBot\Commands\UserCommands;

use Longman\TelegramBot\Commands\UserCommand;
use Longman\TelegramBot\Exception\TelegramException;

/**
 * Start command...
 *
 * @noinspection PhpUndefinedClassInspection
 */
class StartCommand extends UserCommand
{
    /**
     * @return mixed
     *
     * @throws TelegramException
     */
    public function execute()
    {
        return $this->getTelegram()->executeCommand("help");
    }
}
