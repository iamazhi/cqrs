<?php
// added by azhi.
namespace LiteCQRS;
interface EventProviderInterface
{
    public function getAppliedEvents();
    public function dequeueAppliedEvents();
}
