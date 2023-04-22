<?php
namespace Sessions;

function collectionSession(array $array = []): Session
{
    return new Session($array);
}