# hitokoto

A simple PHP hitokoto api.

# Feature

- Customize Request ID.

# Request example

## id=NULL

Request URL: https://api.jimmyho.top/hitokoto/

Request Method: `GET`

Respond: `无法心想事成，是人之常情。`

(Respond is random.)

## !id=NULL

Request URL: https://api.jimmyho.top/hitokoto/?id=1234

Request Method: `GET`

Respond: `恕我无礼，我觉得这世上唯一能够信任的人就是我自己。`

(The id of this sentence is `1234`.)

Request URL: https://api.jimmyho.top/hitokoto/?id=9999999

Request Method: `GET`

Respond: `Error: Exceeded maximum id. The maximum id is 3388.`

(`3388` is the maximum id number.)

Request URL: https://api.jimmyho.top/hitokoto/?id=abcde

Request Method: `GET`

Respond: Error: `没有王子的命，就要有争帝王的心。`

(`abcde` is invaild, so random respond.)

# Acknowledgement

https://github.com/kokororin/hitokoto

http://hitokoto.cn
