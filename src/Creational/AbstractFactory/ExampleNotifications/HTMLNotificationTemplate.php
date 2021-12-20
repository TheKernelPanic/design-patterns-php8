<?php
declare(strict_types=1);

namespace DesignPatternsPhp8\Creational\AbstractFactory\ExampleNotifications;

class HTMLNotificationTemplate implements NotificationTemplate
{
    /**
     * @param string $subject
     * @param string $body
     * @return string
     */
    public function create(string $subject, string $body): string
    {
        return <<<EOF
<html>
<head>
</head>
<body>
<h1>{$subject}</h1>
<p>{$body}</p>
</body>
</html>
EOF;
    }
}