<?hh

async function exception_thrower(): Awaitable<void> {
  throw new Exception();
}

async function basic_exception(): Awaitable<void> {
  // the handle does not throw, but result will be an Exception objection.
  // Remember, this is the same as:
  //   $handle = exception_thrower();
  //   await $handle;
  await exception_thrower();
}

HH\Asio\join(basic_exception());
